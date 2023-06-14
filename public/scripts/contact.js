document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    document.getElementById("contactForm").addEventListener("submit",formSubmit)
}

function formSubmit(e){

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
            e.preventDefault();
            return;
        } 
    }

    document.getElementById("formFields").classList.remove('error')
}