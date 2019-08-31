//Coming Soon

function comingSoon() {
    alert("Thank You for your Interest,But This Feature is Still Being Developed");
}

//For Report a Bug
$('#ReportBugModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body input').val(recipient)
});



//For Making The Educational Details : Javascript
function cloneRow(rowID, tableID) {
    var row = document.getElementById(rowID); // find row to copy
    var table = document.getElementById(tableID); // find table to append to
    var clone = row.cloneNode(true); // copy children too
    clone.id = ' '; // change id or other attributes/contents
    clone.classList.add("cloned");
    table.appendChild(clone) // add new row to end of table

}

//Remove Row
function removeRow(tableID) {
    var table = document.getElementById(tableID);
    let last = table.lastElementChild;

    if (last.classList.contains("cloned")) {
        last.remove();
    }
}

if (document.getElementById('')) {

}