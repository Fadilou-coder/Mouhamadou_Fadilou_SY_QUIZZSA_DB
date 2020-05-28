//recuperation des Eléments
const form = document.getElementById('form');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password1 = document.getElementById('confirm_password');
const file = document.getElementById('votre_image');
var error;

//Fonctions
function target(){
    const inputs = document.getElementsByTagName("input");
    for(input of inputs){
        input.addEventListener("keyup",function(e){
            if(e.target.hasAttribute("name")){
                var small = e.target.getAttribute("name");
                document.getElementById('error-'+small).innerText = ""
            }
        })
    }
}
function checkRequired(inputArray) {
    error = false;
    inputArray.forEach(input => {
        if(input.value.trim() === ''){
            showError(input, `${getFiedName(input)} est obligatoire`);  
            error = true;  
        }else{
            showSuccess(input);
        }
    });
}
//
function showError(input, message) {
    if (input.id !== 'votre_image') {
        input.className = 'form-control border border-danger form-control-lg rounded mt-2';
    } 
    const small  = document.getElementById('error-'+input.name);
    small.innerText = message;
}
//
function showSuccess(input) {
    const formControl = input;
    formControl.className = 'form-control border border-success form-control-lg rounded mt-3';
    const small  = document.getElementById('error-'+input.name);
    small.innerText = '';
}
//
function getFiedName(input){
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
//
function checkLength(input, min,max) {
    if (input.value.length < min) {
        showError(input, `${getFiedName(input)} doit etre au moins ${min} caracteres!!!`);
    }else if (input.value.length > max) {
        showError(input, `${getFiedName(input)} ne doit pas etre plus de ${max} caracteres!!!`);
    }else{
        showSuccess(input);
    }
}
//
function checkPasswordsMatch(input,input1){
    if (input.value !== input1.value) {
        showError(input1, 'Passwords ne correspondent pas!!!');
    }
}

//Events
form.addEventListener('submit',(e)=>{

    if (form.name === 'form-cnx') {
        checkRequired([login,password]);
    }else{
        checkRequired([prenom,nom,login,password,password1,file]);
        //
        checkLength(login,4,15);
        checkLength(password,6,15);
        //
        checkPasswordsMatch(password,password1);
        //
    }
    target();
    if (error) {
        e.preventDefault();
    }
});
