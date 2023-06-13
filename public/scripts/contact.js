document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    document.getElementById("contactForm").addEventListener("submit",formSubmit)
}

function formSubmit(e){

    e.preventDefault();

    document.getElementById("formFields").classList.remove('error')
    document.getElementById("formSuccess").classList.remove('success')
    document.getElementById("formError").classList.remove('error')

    let userName = document.getElementById("username").value;
    let userEmail = document.getElementById("useremail").value;
    let userTel = document.getElementById("usertel").value;
    let userSubject = document.getElementById("usersubject").value;
    let userMessage = document.getElementById("usermessage").value;

    let form = {
        name: userName,
        email: userEmail,
        phone: userTel,            
        subject: userSubject,
        message: userMessage
    }

    for(var key in form){
        if(form[key] === ""){
            document.getElementById("formFields").classList.add('error')
            return;
        } 
    }

    document.getElementById("formFields").classList.remove('error')

    fetch("./DB/contactMethods.php",{
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
    })
    .then(function(response) {
        return response.text()
    })
    .then(function(status){
        if(status==="Inserted"){
            document.getElementById("formSuccess").classList.add('success')
            return;
        }else{
            document.getElementById("formError").classList.add('error')
            return;
        }
    })
}