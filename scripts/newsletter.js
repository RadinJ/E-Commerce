function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }


  function validatenewsletter() {
    var email = $("#emailnews").val();      
    if (validateEmail(email)) {
      alert("Email cadastrado com sucesso!");
    } else {
      alert("Email vazio ou inválido.");
    }    
    return false;
  }

$("#validatenews").on("click", validatenewsletter);
