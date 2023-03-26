function deleteRow(id) {
  if (confirm("Are you sure you want to delete this row?")) {
    window.location.href = "../DB-BACKEND/FUNKCE/delete.php?id=" + id;
  }
}

function showForm() {
  document.getElementById("form-container").style.display = "block";
}

function editRow(id, pilot, destination, gate_code) {
  document.getElementById("edit-id").value = id;
  document.getElementById("edit-pilot").value = pilot;
  document.getElementById("edit-destination").value = destination;
  document.getElementById("edit-gate_code").value = gate_code;
  document.getElementById("edit-form-container").style.display = "block";
}
