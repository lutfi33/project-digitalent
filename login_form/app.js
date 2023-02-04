
var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('.input1');
var $email = document.getElementById('email');
var $password = document.getElementById('password');

function addError(message) {
    $error.innerHTML = message;
    $error.style.display = 'block';
   }
   function removeError() {
    $error.innerHTML = '';
    $error.style.display = 'hidden';
   }
   function validate(event) {
    event.preventDefault();
    $error.style.display = 'none';
    if ($email.value !== 'admin@example.com' || $password.value !== 'password'
   ) {
    addError('Email atau password salah');
    } else {
    removeError();
    alert('Anda Berhasil Login!');
    }
   }
   $form.addEventListener('submit', validate)