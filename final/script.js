
function filterDoctors() {
    var specialization = document.getElementById("specialization").value;
    var doctors = document.getElementsByClassName("doctor-option");

    for (var i = 0; i < doctors.length; i++) {
        if (doctors[i].getAttribute("data-specialization") == specialization || specialization == "") {
            doctors[i].style.display = "block";
        } else {
            doctors[i].style.display = "none";
        }
    }
}
