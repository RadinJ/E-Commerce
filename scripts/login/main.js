function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

function validateUser(username){
  if(username != ""){
    return true;
  }else{
    return false;
  }
}

function validatePasswordRegister(password,passwordconfirm){
    if(password == "")
      return 1;
    if(passwordconfirm == "")
      return 2;
    if(password == passwordconfirm)
     return 3;
    
}


function validatePasswordLogin(password,passwordconfirm){
    if(password == "")
      return false;      
    return true;  
}



function validateCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000") return false;
     
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

  
  function validatelogin() {
    var email = $("#email").val();    
    var password = $("#password").val();


    var emailsituation = false;
    var passsituation = false;
    if (!validateEmail(email)) {
       alert("Email vazio ou inválido.");
    }else{
     emailsituation = true;  


    } 
    if(!validatePasswordLogin(password)){
       alert("Você precisa inserir sua senha.");
    }else{
      passsituation = true;

    }

   if(emailsituation == true && passsituation == true){   
    document.getElementById("validatelogin").HTMLFormElement.submit()
 /*   jQuery.ajax({
      type: "POST",
      url: 'service-login.php',
      data: {functionname: 'loginprocess',  arguments: [$("#email").val(), $("#password").val()]}, 
       success:function(data) {
      alert(data); 
       }
  }); */

    }
  
    return false;
  }


  function validateforget() {
    var email = $("#email").val();    
 
    if (validateEmail(email)) {
      alert("Email válido.");
    } else {
      alert("Email vazio ou inválido.");
    } 
    return false;
  }


  function validateregister() {
    var username = $("#user").val();
    var email = $("#email").val();
    var name = $("#name").val();
    var cpf = $("#cpf").val();
    var password = $("#password").val();
    var passwordconfirm = $("#passwordconfirm").val();

    if (validateEmail(email)) {
      alert("Email válido.");
    } else {
      alert("Email vazio ou inválido.");
    }

    if(validateUser(username)){
        alert("Usuário válido.")
    }else{
        alert("Usuário inválido.")
    }

    if(validatePasswordRegister(password,passwordconfirm) == 1)
        alert("Você precisa inserir uma senha.")
    else if(validatePasswordRegister(password,passwordconfirm) == 2)
        alert("Você precisa confirmar sua senha.")
    else
        alert("Senha válida.")

    if(validateCPF(cpf))
       alert("CPF válido.")
    else
        alert("CPF inválido.")
    
    return false;
  }

  
  $("#validateregister").on("click", validateregister);
  $("#validatelogin").on("click", validatelogin);
  $("#validateforget").on("click", validateforget);