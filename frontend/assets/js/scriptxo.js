// scripte.js phone number 
document.addEventListener("DOMContentLoaded", function() {
    var input = document.querySelector("#téléphone");
    var iti = window.intlTelInput(input, {
      initialCountry: "tn",
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js",
    });
  
    window.iti = iti;
  });
   
  
  //type button saved 
  
  function setType(type) {
    document.getElementById('type').value = type;
  }
  
  // Register form 
  function validateForm() {
    
  
    
    var cin = document.getElementsByName('cin')[0].value;
    var fname = document.getElementsByName('fname')[0].value;
    var surname = document.getElementsByName('surname')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var address = document.getElementsByName('address')[0].value;
    var téléphone = document.getElementById('téléphone').value;
    var password = document.getElementsByName('password')[0].value;
    var confPassword = document.getElementsByName('conf_password')[0].value;
    var genderSelect = document.getElementById("gender");
    var genderError = document.getElementById("gender-error");
    
  
  
   
  
  
  
  
  // Validate Cin
  var cinError = document.getElementById('cin-error');
  if (cin.length === 0 || isNaN(cin) || cin.length !== 8 || (cin.charAt(0) !== '0' && cin.charAt(0) !== '1')) {
    cinError.textContent = "Cin n'est pas valide. Il doit s'agir d'un numéro à 8 chiffres et contient 0 ou 1.";
    return false;
  } else {
    cinError.textContent = "";
  }
  
  // Validate fname 
  var fnameError = document.getElementById('fname-error');
  if (fname.length=="" || fname.length < 3) {
    fnameError.textContent = 'Le fname ne peut pas être vide et doit contenir au moins 3 caractères.';
    return false;
  } else {
    fnameError.textContent = "";
  }
  
  
  
  //Validate surname
  
  var surnameError = document.getElementById('surname-error');
  if (surname.length=="" || surname.length < 3) {
    surnameError.textContent = 'Le surname ne peut pas être vide et doit contenir au moins 3 caractères.';
    return false;
  } else {
    surnameError.textContent = ""; 
  }
 
  // Validate Email
  var emailError = document.getElementById('email-error');
  if (email.length=="" || !email.includes('@') || !email.includes('.')) {
    emailError.textContent = 'Email n\'est pas valide. Il doit contenir "@" et "." et ne pas être vide.';
    return false;
  } else {
    emailError.textContent = "";
  }
 
    // verif gender
    if (genderSelect.value === "") {
      genderError.textContent = "Veuillez sélectionner votre genre.";
      genderError.style.color = "red";
      return false; // Prevent form submission
  } else {
      genderError.textContent = "";
  }

  // Validate Adresse
  var addressError = document.getElementById('address-error');
  if (address.length=="" ||  address.length < 3) {
    addressError.textContent = 'L\'adresse ne peut pas être vide et doit contenir au moins 3 caractères.';
    return false;
  } else {
    addressError.textContent = "";
  }
  
  // Validate Téléphone
  var téléphoneError = document.getElementById('téléphone-error');
  if (téléphone.length=="" || téléphone.charAt[0]=='+' ) {
    téléphoneError.textContent = 'Téléphone n\'est pas valide. Il doit contenir "+" avec le code de pays et ne pas être vide.';
    return false;
  } else {
    téléphoneError.textContent = "";
  }
  
  
  // Validate Password 
  var passwordError = document.getElementById('password-error');
  
  if (password.length=="" || password.length<8 || !/(?=.*\d)(?=.*[a-zA-Z])/.test(password)) {
    passwordError.textContent = 'Le mot de passe n\'est pas valide. Il doit contenir à la fois des chiffres et des lettres.';
    return false;
  } else {
    passwordError.textContent = "";
  }
  
  // Validate Confirm Password
  
  var confPasswordError = document.getElementById('confpassword-error');
  
  if (password !== confPassword) {
    confPasswordError.textContent = 'Le mot de passe et la confirmation ne correspondent pas.';
    return false;
  } else {
    confPasswordError.textContent = "";
  }
  
  
  
  // error message captcha
  
    var captchaChecked = grecaptcha.getResponse();
    if (!captchaChecked || captchaChecked.length === 0) {
        $('#error-message').text("vérifier que vous n'êtes pas un robot .").show();
        return false;
    } else {
        $('#error-message').hide();
    }
  
    // All validations passed, the form is valid
    return true;
  }
  
  
  
  
  
  //hide eror message from javascript
  
  function hideErrorMessage(inputName) {
    var errorElement = document.getElementById(inputName + '-error');
    errorElement.textContent = "";
  }
  
  // Event listener to hide error message when input field is clicked
  document.addEventListener('DOMContentLoaded', function() {
    var inputElements = document.getElementsByTagName('input');
    for (var i = 0; i < inputElements.length; i++) {
      inputElements[i].addEventListener('click', function(event) {
        var inputName = event.target.name;
        hideErrorMessage(inputName);
      });
    }
  });
  
  
  // validate login
  
  function validlogin(){
    var email = document.getElementsByName('email')[0].value;
    var password = document.getElementsByName('password')[0].value;
  
  
    var emailError = document.getElementById('email-error');
    var passworderror = document.getElementById('password-error');
  
  
    // Validate Email
    if (email.length=="" || !email.includes('@') || !email.includes('.')) {
      emailError.textContent = 'Email n\'est pas valide. Il doit contenir "@" et "." et ne pas être vide.';
      return false;
    } else {
      emailError.textContent = "";
    }
  
  
  if (password.length=="" || password.length<8 || !/(?=.*\d)(?=.*[a-zA-Z])/.test(password)) {
    passwordError.textContent = 'Le mot de passe n\'est pas valide. Il doit contenir à la fois des chiffres et des lettres.';
    return false;
  } else {
    passwordError.textContent = "";
  }
  
  
  
  }
  
  // Validate Contact 
  
  function valdicontact(){
    
    var fname = document.getElementsByName('fname')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var téléphone = document.getElementById('téléphone').value;
    var sujet = document.getElementsByName('sujet')[0].value;
    var message = document.getElementsByName('message')[0].value;
  
  
  
    var nomerror = document.getElementById('fname-error');
    var emailrror = document.getElementById('email-error');
    var téléphoneeError = document.getElementById('téléphone-error');
    var sujetError = document.getElementById('sujet-error');
    var messageError = document.getElementById('message-error');
  
  
  
  
    var nomError = document.getElementById('fname-error');
    if (fname.length=="" || fname.length < 3) {
      nomError.textContent = 'Le fname ne peut pas être vide et doit contenir au moins 3 caractères.';
      return false;
    } else {
      nomError.textContent = "";
    }
    
  
  
    var emailError = document.getElementById('email-error');
    if (email.length=="" || !email.includes('@') || !email.includes('.')) {
      emailError.textContent = 'Email n\'est pas valide. Il doit contenir "@" et "." et ne pas être vide.';
      return false;
    } else {
      emailError.textContent = "";
    }
  
  
    var téléphoneError = document.getElementById('téléphone-error');
    if (téléphone === "" || téléphone.length < 8 || !téléphone.includes("+")) {
      téléphoneError.textContent = 'Téléphone n\'est pas valide. Il doit contenir "+" et ne pas être vide.';
      return false;
    } else {
      téléphoneError.textContent = "";
    }
   
  
  var sujetError = document.getElementById('sujet-error');
  if (!sujet.trim() ) {
    sujetError.textContent = 'sujet ne doit pas etre vide';
    return false;
  } else {
    sujetError.textContent = "";
  }
  
  
  var messageError = document.getElementById('message-error');
  if (!message.trim() ) {
    messageError.textContent = 'message ne doit pas etre vide';
    return false;
  } else {
    messageError.textContent = "";
  }
  
  
    
  
  }
  
  
  function validateoffres() {
    var emailab = document.getElementsByName('emailab')[0].value;
    var emailabError = document.getElementById('emailab-error');
  
    if (emailab.length === 0 || !emailab.includes('@') || !emailab.includes('.')) {
      emailabError.textContent = 'Email n\'est pas valide. Il doit contenir "@" et "." et ne pas être vide.';
      return false;
    } else {
      emailabError.textContent = "";
    }
  
    return true; 
  }


  
  /* otp js */
      // Add event listeners to each input field
      const otpFields = document.querySelectorAll('.otp_field');

      otpFields.forEach((field, index) => {
          field.addEventListener('input', (event) => {
              const input = event.target;
              const value = input.value.trim();
  
              if (value.length === 1) {
                  // Move the focus to the next input field
                  if (index + 1 < otpFields.length) {
                      otpFields[index + 1].focus();
                  }
              } else if (value.length > 1) {
                  // If the user pastes multiple characters, take only the first one
                  input.value = value.charAt(0);
              }
          });
  
          // Allow editing of the previous field if Backspace key is pressed
          field.addEventListener('keydown', (event) => {
              if (event.key === 'Backspace' && index > 0 && field.value.length === 0) {
                  otpFields[index - 1].focus();
              }
          });
      });
  
      // Prevent form submission on Enter key press
      const otpForm = document.querySelector('.form form');
      otpForm.addEventListener('keydown', (event) => {
          if (event.key === 'Enter') {
              event.preventDefault();
          }
      });


      function restepass(){
  
        var email = document.getElementsByName('email')[0].value;
        var emailerror = document.getElementById('email-error');
      
        var emailError = document.getElementById('email-error');
        if (email.length=="" || !email.includes('@') || !email.includes('.')) {
          emailError.textContent = 'Email n\'est pas valide. Il doit contenir "@" et "." et ne pas être vide.';
          return false;
        } else {
          emailError.textContent = "";
        }


        
      
        
      
      }
      function checkSelection() {
        var selectElement = document.getElementById("troubles");
        var selectedOption = selectElement.value;

        if (selectedOption === "Quels troubles souffre votre enfant?") {
            document.getElementById("error-message").textContent = "choisir le maladie de votre enfant.";
            return false; 
        } else {
            document.getElementById("error-message").textContent = "";
          
            return true; 
        }
    }