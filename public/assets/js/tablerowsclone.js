// document.addEventListener("DOMContentLoaded", function() {
//     document.addEventListener("click", function(event) {
//         if (event.target.classList.contains("addRowBtn")) {
//             var clickedRow = event.target.closest("tr"); // Get the closest parent row
//             addRowAfter(clickedRow);
//         }
//     });

//     // Initially show Add Row buttons only in the last row
//     var lastRowAddButton = document.querySelector("#productTable tbody tr:last-child .addRowBtn");
//     lastRowAddButton.style.display = "inline-block";
// });

// function addRowAfter(row) {
//     var newRow = row.cloneNode(true); // Clone the clicked row
//     var inputs = newRow.querySelectorAll('input');
//     var rowIndex = getRowIndex(row) + 1; // Get the index of the clicked row
//     inputs.forEach(function(input) {
//         var inputName = input.getAttribute('name').replace(/\[\d+\]/, '[' + rowIndex + ']');
//         var inputId = input.getAttribute('id').replace(/\d+/, rowIndex);
//         input.setAttribute('name', inputName);
//         input.setAttribute('id', inputId);
//     });

//     // Increment index for the "Add Row" button in the new row
//     var addButton = newRow.querySelector('.addRowBtn');
//     addButton.setAttribute('data-index', rowIndex);

//     // Hide "Add Row" button in the current row
//     var currentRowAddButton = row.querySelector('.addRowBtn');
//     currentRowAddButton.style.display = "none";

//     row.parentNode.insertBefore(newRow, row.nextSibling);

//     // Show "Add Row" button in the newly added row
//     var lastRowAddButton = document.querySelector("#productTable tbody tr:last-child .addRowBtn");
//     lastRowAddButton.style.display = "inline-block";
// }

// function getRowIndex(row) {
//     var rows = document.querySelectorAll("#productTable tbody tr");
//     return Array.from(rows).indexOf(row) + 1;
// }








// document.addEventListener("DOMContentLoaded", function() {
//     document.addEventListener("click", function(event) {
//         if (event.target.classList.contains("addRowBtn")) {
//             var clickedRow = event.target.closest("tr"); // Get the closest parent row
//             addRowAfter(clickedRow);
//         }
//     });

//     // Initially show Add Row buttons only in the last row
//     var lastRowAddButton = document.querySelector("#productTable tbody tr:last-child .addRowBtn");
//     lastRowAddButton.style.display = "inline-block";
// });

// function addRowAfter(row) {
//     var newRow = row.cloneNode(true); // Clone the clicked row
//     var inputs = newRow.querySelectorAll('input');
//     var rowIndex = getRowIndex(row) + 1; // Get the index of the clicked row
//     inputs.forEach(function(input) {
//         var inputName = input.getAttribute('name').replace(/\[\d+\]/, '[' + rowIndex + ']');
//         var inputId = input.getAttribute('id').replace(/\d+/, rowIndex);
//         input.setAttribute('name', inputName);
//         input.setAttribute('id', inputId);
//     });

//     // Increment index for the "Add Row" button in the new row
//     var addButton = newRow.querySelector('.addRowBtn');
//     addButton.setAttribute('data-index', rowIndex);

//     // Hide "Add Row" button in the current row
//     var currentRowAddButton = row.querySelector('.addRowBtn');
//     currentRowAddButton.style.display = "none";

//     row.parentNode.insertBefore(newRow, row.nextSibling);

//     // Show "Add Row" button in the newly added row
//     var lastRowAddButton = document.querySelector("#productTable tbody tr:last-child .addRowBtn");
//     lastRowAddButton.style.display = "inline-block";

//     // Update row attributes and serial numbers
//     updateRowAttributes();
// }

// function getRowIndex(row) {
//     var rows = document.querySelectorAll("#productTable tbody tr");
//     return Array.from(rows).indexOf(row) + 1;
// }

// function updateRowAttributes() {
//     var rows = document.querySelectorAll("#productTable tbody tr");
//     rows.forEach(function(row, index) {
//         var inputs = row.querySelectorAll("input");
//         inputs.forEach(function(input) {
//             var attributeName = input.getAttribute("name");
//             if (attributeName) {
//                 input.setAttribute("name", attributeName.replace(/\[\d+\]/, "[" + (index + 1) + "]"));
//             }
//             var attributeId = input.getAttribute("id");
//             if (attributeId) {
//                 input.setAttribute("id", attributeId.replace(/_\d+_/g, "_" + (index + 1) + "_"));
//             }
//         });
//         var serialNumberCell = row.querySelector(".srno");
//         if (serialNumberCell) {
//             serialNumberCell.textContent = index + 1;
//         }
//     });
// }





document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("addRowBtn")) {
            var clickedRow = event.target.closest("tr"); // Get the closest parent row
            addRowAfter(clickedRow);
        } else if (event.target.classList.contains("RemoveRowBtn")) {
            var clickedRow = event.target.closest("tr"); // Get the closest parent row
            removeRow(clickedRow);
        }
    });

    // Initially show Add Row buttons only in the last row
    var lastRowAddButton = document.querySelector("#productTable tbody tr:last-child .addRowBtn");
    lastRowAddButton.style.display = "inline-block";
});

function addRowAfter(row) {
    var newRow = row.cloneNode(true); // Clone the clicked row
    var inputs = newRow.querySelectorAll('input');
    var rowIndex = getRowIndex(row) + 1; // Get the index of the clicked row
    inputs.forEach(function(input) {
        input.value = '';
        var inputName = input.getAttribute('name').replace(/\[\d+\]/, '[' + rowIndex + ']');
        var inputId = input.getAttribute('id').replace(/\d+/, rowIndex);
        input.setAttribute('name', inputName);
        input.setAttribute('id', inputId);
    });

    // Increment index for the "Add Row" button in the new row
    var addButton = newRow.querySelector('.addRowBtn');
    addButton.setAttribute('data-index', rowIndex);

    // Hide "Add Row" button in the current row
    var currentRowAddButton = row.querySelector('.RemoveRowBtn');
    currentRowAddButton.style.display = "block";
   
    // Hide "Add Row" button in the current row
    var currentRowAddButton = row.querySelector('.addRowBtn');
    currentRowAddButton.style.display = "none";


    row.parentNode.insertBefore(newRow, row.nextSibling);

    // Show "Add Row" button in the newly added row
    var lastRowAddButton = document.querySelector("#productTable tbody tr:last-child .addRowBtn");
    lastRowAddButton.style.display = "inline-block";

    // Update row attributes and serial numbers
    updateRowAttributes();
}

function removeRow(row) {
    row.parentNode.removeChild(row); // Remove the row from its parent
    updateRowAttributes(); // Update the row attributes and serial numbers
}

function getRowIndex(row) {
    var rows = document.querySelectorAll("#productTable tbody tr");
    return Array.from(rows).indexOf(row) + 1;
}

function updateRowAttributes() {
    var rows = document.querySelectorAll("#productTable tbody tr");
    rows.forEach(function(row, index) {
        var inputs = row.querySelectorAll("input");
        inputs.forEach(function(input) {
            var attributeName = input.getAttribute("name");
            if (attributeName) {
                input.setAttribute("name", attributeName.replace(/\[\d+\]/, "[" + (index + 1) + "]"));
            }
            var attributeId = input.getAttribute("id");
            if (attributeId) {
                input.setAttribute("id", attributeId.replace(/_\d+_/g, "_" + (index + 1) + "_"));
            }
        });
        var serialNumberCell = row.querySelector(".srno");
        if (serialNumberCell) {
            serialNumberCell.textContent = index + 1;
        }
    });
}





