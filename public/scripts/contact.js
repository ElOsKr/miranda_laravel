function formSubmit(){

    document.getElementById("formFields").classList.remove('error')

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
            return false;
        } 
    }

    document.getElementById("formFields").classList.remove('error')
}