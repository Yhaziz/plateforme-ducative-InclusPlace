const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});


// js form admin

function loginadmin() {
	var email = document.getElementsByName('email')[0].value;
	var password = document.getElementsByName('password')[0].value;
	var keyadmin = document.getElementsByName('keyadmin')[0].value;
  
	var emailError = document.getElementById('email-error');
	var passwordError = document.getElementById('password-error');
	var keyadminError = document.getElementById('keyadmin-error');
  
	if (email.length === "" || !email.includes('@') || !email.includes('.')) {
	  emailError.textContent = 'Email n\'est pas valide. Il doit contenir "@" et "." et ne pas être vide.';
	  return false;
	} else {
	  emailError.textContent = "";
	}
  
	if (password.length === "" ) {
	  passwordError.textContent = 'Le mot de passe n\'est pas valide. Il doit contenir à la fois des chiffres et des lettres.';
	  return false;
	} else {
	  passwordError.textContent = "";
	}
  
	if (keyadmin.length === "" || keyadmin.length < 8) {
	  keyadminError.textContent = 'Clé invalide';
	  return false;
	} else {
	  keyadminError.textContent = "";
	}
  }
  
// Add event listeners to input fields to clear error messages on focus
document.getElementsByName('email')[0].addEventListener('focus', function () {
	document.getElementById('email-error').textContent = "";
  });
  
  document.getElementsByName('password')[0].addEventListener('focus', function () {
	document.getElementById('password-error').textContent = "";
  });
  
  document.getElementsByName('keyadmin')[0].addEventListener('focus', function () {
	document.getElementById('keyadmin-error').textContent = "";
  });

  