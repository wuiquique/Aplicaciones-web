function boton() {
    let input = document.getElementById("inputname").value
    if (input == "") {
        alert("Debe de ingresar su nombre")
    }
    else {
        alert("Bienvenido " + input)
        document.getElementById("navbar").style.backgroundColor = "yellow"
        document.getElementById("texto").style.color = "red"
    }
}