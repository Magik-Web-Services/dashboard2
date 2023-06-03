$(document).ready(function () {
    // Data tables
    // let table = new DataTable('#myTable');
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

    var row = `<tr>
    <td><input class="itDetail" type="text" placeholder="Type or click to select an item." name="itm_details"></td>
    <td><input class="qty" type="number" value="1.00" name="qty"></td>
    <td><input class="unit" type="text" name="unit"></td>
    <td><input class="rate" type="number" value="0.00" name="rate"></td>
    <td><input class="amount" type="number" value="0.00" name="amount"></td>
    <td><input type="button" value="delete" onclick="deleteRow(this)"/></td>
    </tr>  `;

    // Add another line 
    jQuery('#Addline').click(function () {
        jQuery('#employee-table tbody').append(row);
    })





    jQuery(document).on('keyup', '.itDetail', function () {
        let val = $(this).val();
        let parent = $(this).parent().parent().parent().html();

        // console.log(val);
        let unit = $(this).parents("tr").find(".unit")
        let rate = $(this).parents("tr").find(".rate")

        // console.log(unit);
        // $(unit).val("hii")

        if (val != "") {
            // Add Data in ITEM DETAILS
            let array
            $.ajax({
                url: "../../pages/database/getData.php",
                method: "post",
                dataType: "json",
                success: function (data) {
                    array = data;
                    console.log(array);
                    $(rate).val(array[3])
                    $(unit).val(array[2])
                }
            })
        }
    })
})
