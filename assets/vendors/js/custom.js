$(document).ready(function () {
    $('#myTable').DataTable();
});

// Delete row on delete button click
jQuery(document).ready(function () {
    jQuery("#myTable").on('click', '.dlt', function () {

        jQuery(this).closest('tr').remove();
    });
});
// Edit row on edit button click
// $(document).on("click", ".edit", function () {
//     $(this).parents("tr").find("td:not(:last-child)").each(function () {
//         $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
//     });
//     $(this).parents("tr").find(".add, .edit").toggle();
//     $(".add-new").attr("disabled", "disabled");
// });
// Append table with add row form on add new button click
// $(".add-new").click(function () {
//     // $(this).attr("disabled", "disabled");
//     var index = $("table tbody tr:last-child").index();
//     var row = '<tr>' +
//         '<td><input type="text" placeholder="Type or click to select an item." class="form-control" name="itm_details" id="First name"></td>' +
//         '<td><input type="number" value="1.00" class="form-control" name="Last name" id="Last name"></td>' +
//         '<td><input type="number" class="form-control" name="Address" id="Address"></td>' +
//         '<td>' + actions + '</td>' +
//         '</tr>';
//     $("table").append(row);
//     $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
//     $('[data-toggle="tooltip"]').tooltip();
// });

// --quotes page js----

// function addNewRow() {
//     var table = document.getElementById("employee-table");
//     var rowCount = table.rows.length;
//     var cellCount = table.rows[0].cells.length;
//     var row = table.insertRow(rowCount);
//     for (var i = 0; i < cellCount; i++) {
//         var cell = row.insertCell(i);
//         if (i < cellCount - 1) {
//             cell.innerHTML = '<input type="text" />';
//         }
//         else {
//             cell.innerHTML = '<input type="button" value="delete" onclick="deleteRow(this)" />';
//         }
//     }
// }

/* This method will delete a row */
function deleteRow(ele) {
    var table = document.getElementById('employee-table');
    var rowCount = table.rows.length;
    if (rowCount <= 1) {
        alert("There is no row available to delete!");
        return;
    }
    if (ele) {
        //delete specific row
        ele.parentNode.parentNode.remove();
    }
    else {
        //delete last row
        table.deleteRow(rowCount - 1);
    }
}
// --quotes page js----
// ---file uipload----
function myFunction() {
    var x = document.getElementById("myFile");

}
// ---file uipload----


// DataTable-page--All invoices--
$(document).ready(function () {
    $('#example').DataTable({
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [[1, 'asc']]
    });
});