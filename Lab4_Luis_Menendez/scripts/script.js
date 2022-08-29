function age() {
    let age = document.getElementById("ageInput").value
    if(age < 18) {
        document.getElementById("name").disabled = true
        document.getElementById("lastname").disabled = true
        document.getElementById("inputGroupSelect01").disabled = true
        document.getElementById("phone").disabled = true
        document.getElementById("email").disabled = true
        document.getElementById("domain").disabled = true
        document.getElementById("message").disabled = true
        document.getElementById("dangertext").style.display = 'inline'
    }
    else {
        document.getElementById("name").disabled = false
        document.getElementById("lastname").disabled = false
        document.getElementById("inputGroupSelect01").disabled = false
        document.getElementById("phone").disabled = false
        document.getElementById("email").disabled = false
        document.getElementById("domain").disabled = false
        document.getElementById("message").disabled = false
        document.getElementById("dangertext").style.display = 'none'
    }
}

function modal() {
    let age = document.getElementById("ageInput").value
    let name = document.getElementById("name").value
    let email = document.getElementById("email").value
    let domain = document.getElementById("domain").value
    if(age < 18) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'You are underaged',
          })
    }
    else {
        Swal.fire({
            icon: 'success',
            title: 'Succes',
            text: 'Welcome ' + name + ', we will be contacting you soon via ' + email + '@' + domain,
          }).then(function() {
            window.location = "../index.html"
          })
    }    
}