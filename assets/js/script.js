$(document).ready(function () {
    // Data tables
    $('#myTable').DataTable({});
    //   Database

    // Customers
    // Customerdeletes
    let Customerdeletes = jQuery('.Customerdeletes');
    Array.from(Customerdeletes).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id

            if (confirm("Are you sure you want to delete this Customer!")) {
                window.location = `../../pages/database/customers/deleteCustomers.php?Customerdeletes=${sno}`;
            }
        })
    })

    // Customersedit
    let Customersedit = jQuery('.Customersedit');
    Array.from(Customersedit).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id
            window.location = `../../pages/customer/Customersedit.php?Customersedit=${sno}`;
        })
    })

    // Item

    // itemsdeletes
    let itemsdeletes = jQuery('.itemsdeletes');
    Array.from(itemsdeletes).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id
            if (confirm("Are you sure you want to delete this item!")) {
                window.location = `../../pages/database/items/deleteitem.php?itemsdeletes=${sno}`;
            }
        })
    })

    // itemsedit
    let itemsedit = jQuery('.itemsedit');
    Array.from(itemsedit).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id
            window.location = `../../pages/items/itemedit.php?itemsedit=${sno}`;
        })
    })

    // Logout

    $("#Logout").click(function () {
        if (confirm('Are You Sure')) {
            window.location = `../../pages/logout.php`
        }
    })

    // Add new row
    $(document).on('click', '#Addline', function () {
        var listitems_c = jQuery('#item_count').val();
        listitems_c = parseInt(listitems_c) + 1;
        jQuery('#item_count').val(listitems_c);
        var extend_items = `
<tr class="listitems" id="itemId_${listitems_c}">
<td>
    <select class="selItem" id="item_item_${listitems_c}" style='width: 200px;'>
        <option value='0'>- Search Item -</option>
    </select>
</td>
<td><input onchange="calculate(this)" id="item_qty_${listitems_c}" class="qty" type="number" value="1" name="qty"></td>
<td><input id="item_unit_${listitems_c}" class="unit" type="text" name="unit"></td>
<td><input onchange="calculate(this)" id="item_rate_${listitems_c}" class="rate" type="number" value="0" name="rate"></td>
<td><input onchange="calculate(this)" id="item_amount_${listitems_c}" readonly class="amount" type="number" value="0" name="amount"></td>
<td><input id="item_delete_${listitems_c}" type="button" value="delete" onclick="deleteRow(this)" /></td>
</tr>
    `;

        jQuery('#employee-table tbody').append(extend_items);
        Ajax()
    });
})


function calculate(id) {

    let item_id = id.id,
        split_id = item_id.split("_"),
        select_field = split_id[1],
        select_id = split_id[2],
        qty = jQuery('#item_qty_' + select_id).val() ? jQuery('#item_qty_' + select_id).val() : 0,
        rate = jQuery('#item_rate_' + select_id).val() ? jQuery('#item_rate_' + select_id).val() : 0
    // amount = jQuery('#item_amount_' + select_id).val() ? jQuery('#item_amount_' + select_id).val() : 0;

    if (select_field) {
        switch (select_field) {
            case 'qty':
                var price = qty * rate;
                jQuery('#item_amount_' + select_id).val((price).toFixed(2));
                break;
            case 'rate':
                var total_unit = qty * rate
                jQuery('#item_amount_' + select_id).val(total_unit.toFixed(2));
                break;
            case 'item':
                jQuery('#item_amount_' + select_id).val(rate);
                break;
            default:
        }
    }

    var each_item_price = 0;
    jQuery('.amount').each(function () {
        each_item_price += parseFloat(jQuery(this).val());
    });
    jQuery('#Sub_Total').val(each_item_price);
    jQuery('#total').val(each_item_price);
}

function calculate2(id) {
    let item_id = id.id,
        Sub_Total = jQuery('#Sub_Total').val() ? jQuery('#Sub_Total').val() : 0,
        Discount = jQuery('#Discount').val() ? jQuery('#Discount').val() : 0,
        Adjustment = jQuery('#Adjustment').val() ? jQuery('#Adjustment').val() : 0,
        selectTax = jQuery('#selectTax'),
        total = jQuery('#total')
    let tax = jQuery('#selectTax').find(':selected').val()



    if (item_id) {
        switch (item_id) {
            case 'Adjustment':
                console.log('Adjustment');
                let Adjus = parseInt(Sub_Total) + parseInt(Adjustment);
                jQuery('#total').val(Adjus);
                break;
            case 'Discount':
                console.log('Discount');
                switch (tax) {
                    case '$':
                        console.log('$');
                        let discount$ = parseInt(Sub_Total) - parseInt(Adjustment);
                        jQuery('#total').val(discount$);
                        break;
                    case '%':
                        console.log('%');
                        let dis = parseInt(Sub_Total) - ((parseInt(Sub_Total) * parseInt(Discount)) / 100);
                        // let dis2 = parseInt(Sub_Total) - parseInt(dis);
                        // console.log(dis2);
                        jQuery('#total').val(dis);
                        break;
                    default:
                        break;
                }
        }
    }
}
