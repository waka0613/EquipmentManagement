function sortEquipmentsSubmit() {
    document.sortEquipmentsForm.submit();
}

function changeValue() {
    document.getElementById("equipment_sort").value = select.value;
}

var select = document.getElementById('equipmentsSort');

select.addEventListener('change', function () {
    changeValue();
    sortEquipmentsSubmit();
},false)

