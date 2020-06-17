//recuperation des Eléments
const form = document.getElementById('form');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password1 = document.getElementById('confirm_password');
const file = document.getElementById('votre_image');
//Elément du formulaire de créations questions
const question = document.getElementById('question');
const score = document.getElementById('score');
const type = document.getElementById('type');
const ajout = document.getElementById('ajout');

var nbInput = 0;
var tmp = "";
var nbre = 3;
var ind = 0;
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
    if (form.name === 'form-qst') {
        question.addEventListener("keyup",function(e){
            if(e.target.hasAttribute("name")){
                showSuccess(question);
            }
        });
        type.addEventListener("change",function(e){
            if(e.target.hasAttribute("name")){
                showSuccess(type);
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
        input.className = 'form-control border border-danger rounded mt-2';
    } 
    else{
        input.className = 'border border-danger bg-none float-right col-md-5 col-8';
    }
    const small  = document.getElementById('error-'+input.name);
    small.innerText = message;
}
//
function showSuccess(input) {
    if (input.id !== 'votre_image') {
        input.className = 'form-control border border-success rounded mt-3';
    }
    else{
        input.className = 'border border-success bg-none float-right col-md-5 col-8';
    }
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
        error = true;
    }else if (input.value.length > max) {
        showError(input, `${getFiedName(input)} ne doit pas etre plus de ${max} caracteres!!!`);
        error = true;
    }else{
        showSuccess(input);
    }
}
//
function checkPasswordsMatch(input,input1){
    if (input.value !== input1.value) {
        showError(input1, 'Passwords ne correspondent pas!!!');
        error = true;
    }
}

function loadFile(event){
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
    URL.revokeObjectURL(output.src)
    }
}
//
function ajouterChamps(){
    var formulaire = document.getElementById('formulaire');
    div = document.createElement("div");
    div.setAttribute("class", "col-sm-7");
    if(type.value == 'choixT'){
        if (tmp && tmp != 'choixT') {
            formulaire.innerText = '';
            nbInput = 0;
            tmp = 'choixT'
        }
        if(nbInput > 0){
            alert('Vous avez droit à un seul champs de type text');
        }
        else{
            tmp = 'choixT';
            nbInput++;
            ligne = document.createElement("div");
            ligne.setAttribute("id","ligne"+nbInput);
            ligne.setAttribute("class","form-group row");
            formulaire.appendChild(ligne);
            label = document.createElement("label");
            label.innerHTML = "Reponse";
            label.setAttribute("class","col-sm-5 col-md-2 col-form-label mr-md-3 mr-lg-0");
            ligne.appendChild(label);
            champ = document.createElement("input");
            champ.setAttribute("type","text"); 
            champ.setAttribute("name","reponse");
            champ.setAttribute("class","form-control");
            champ.setAttribute("id","reponse");
            div.appendChild(champ);
            err = document.createElement("small");
            err.setAttribute("id","error-reponse");
            err.setAttribute("class","text-danger");
            div.appendChild(err);
            ligne.appendChild(div);
        }
    }
    else{
        if(type.value == 'choixM'){
            if (tmp && tmp != 'choixM') {
                formulaire.innerText = '';
                nbInput = 0;
                nbre = 3;
                tmp = 'choixM'
            }
            if(nbInput >= nbre){
                alert('le nombre de reponses max est 3');
            }
            else{
                tmp = 'choixM';
                ligne = document.createElement("div");
                ligne.setAttribute("id","ligne"+nbInput);
                ligne.setAttribute("class","form-group row");
                formulaire.appendChild(ligne);
                label = document.createElement("label");
                label.innerHTML = "Reponse "+(nbInput+1)+" &nbsp;&nbsp;&nbsp;";
                ligne.appendChild(label);
                champ = document.createElement("input");
                champ.setAttribute("type","text"); 
                champ.setAttribute("name","reponse"+nbInput);
                champ.setAttribute("class","form-control");
                champ.setAttribute("id","reponse"+nbInput);
                div.appendChild(champ);
                check = document.createElement("input");
                check.setAttribute("type","checkbox");
                check.setAttribute("name","vrai"+nbInput);
                check.setAttribute("class","mt-3 mr-1");
                btn = document.createElement("button");                                
                btn.setAttribute("type","button");
                btn.setAttribute("name","supp"+nbInput);
                btn.setAttribute("class","border border-none bg-light");
                btn.innerHTML = '<img src="Images/ic-supprimer.png" onclick="supp_champs('+nbInput+')" />';
                err = document.createElement("small");
                err.setAttribute("id","error-reponse"+nbInput);
                err.setAttribute("class","text-danger");
                div.appendChild(err);
                ligne.appendChild(div);
                ligne.appendChild(check);
                ligne.appendChild(btn);
                nbInput++;
            }    
        }
        else{
            if(type.value == 'choixS')
            {  
                if (tmp && tmp != 'choixS') {
                    formulaire.innerText = '';
                    formulaire.innerHTML = '</br>';
                    nbInput = 0;
                    nbre = 3;
                    tmp = 'choixS'
                }
                if(nbInput >= nbre){
                    alert('le nombre de reponses max est 3');
                }
                else{
                    tmp = 'choixS'; 
                    ligne = document.createElement("div");
                    ligne.setAttribute("id","ligne"+nbInput);
                    ligne.setAttribute("class","form-group row");
                    formulaire.appendChild(ligne);
                    label = document.createElement("label");
                    label.innerHTML = "Reponse "+(nbInput+1)+" &nbsp;&nbsp;&nbsp;";
                    ligne.appendChild(label);
                    champ = document.createElement("input");
                    champ.setAttribute("type","text"); 
                    champ.setAttribute("name","reponse"+nbInput);
                    champ.setAttribute("class","form-control");
                    champ.setAttribute("id","reponse"+nbInput);
                    div.appendChild(champ);
                    radio = document.createElement("input");
                    radio.setAttribute("type","radio");
                    radio.setAttribute("name","vrai");
                    radio.setAttribute("value",champ.name);
                    radio.setAttribute("class","mt-3 mr-1");
                    btn = document.createElement("button");                                
                    btn.setAttribute("type","button");
                    btn.setAttribute("name","supp"+nbInput);
                    btn.setAttribute("class","border border-none bg-light");
                    btn.innerHTML = '<img src="Images/ic-supprimer.png" onclick="supp_champs('+nbInput+')" />';
                    err = document.createElement("small");
                    err.setAttribute("id","error-reponse"+nbInput);
                    err.setAttribute("class","text-danger");
                    div.appendChild(err);
                    ligne.appendChild(div); 
                    ligne.appendChild(radio);
                    ligne.appendChild(btn);
                    nbInput++;
                }
            }
        }
    }    
}
function supp_champs(l){
    var inp = document.getElementById("ligne"+l);
    inp.remove();
    if (nbInput>=nbre){
        nbre = l+1;
    }
    if (l == 2) {
        if (nbre == 2) {
                nbre=3;
                l=1;
        }
        if (nbre == 1) {
            var inp = document.getElementById("ligne"+1);
            inp.remove();
            nbre = 3;
            l=0;
        }
    }
    if (l==1 && nbre==1) {
        l=0;
        nbre = 2;
    }
    nbInput = l;
}


function fileContentLoader(target, fileName){
    target.load(`${fileName}`,function(response, status,detail){        
         if(status === 'error'){
            $("#body").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
        }
    });
}


//Events
form.addEventListener('submit',(e)=>{

    if (form.name === 'form-cnx') {
        checkRequired([login,password]);
    }
    else{
        if (form.name === 'form-qst') {
            checkRequired([question,score,type]);
        }else{
            checkRequired([prenom,nom,login,password,password1,file]);
            //
            checkLength(login,4,15);
            checkLength(password,6,15);
            //
            checkPasswordsMatch(password,password1);
            //
        }
    }
    target();
    if (error) {
        e.preventDefault();
    }
});
if (file) {
    file.addEventListener("change",(e)=>{
        loadFile(e)
    }); 
}
if (form.name === 'form-qst') {
    type.addEventListener("change",function(e){
        ajouterChamps()
    })
    ajout.addEventListener('click',(e)=>{
            ajouterChamps()
            checkRequired([type]);
            target();
    });
}

if(form.name === 'form-cnx'){
$('#ins').click(function(e){
    location.replace(`index.php?lien=creer_jr`)
});
}