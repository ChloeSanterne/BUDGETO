var cases = document.querySelectorAll('.cases');
var salaires = document.querySelectorAll('.salaires');
var btnAddS = document.querySelector('.ajouter');
var ResultatRecette = document.querySelector('.TR');

var DepensesFixes =document.querySelectorAll('.DepensesFixes');
var ResultatDepensesFixes = document.querySelector('.TD');
var btnAddDF = document.querySelector('.btnDF');

var Achats = document.querySelectorAll('.Achats');
var ResultatAchats = document.querySelector('.TDM');
var btnAddA = document.querySelector ('.btnA');
var AchatsList = document.querySelector('.AchatsList')
var AchatsId =null;

// function ajouter et additionner les salaires/revenus
console.log("coucou");
function addSalaires(){
    
    
    
    var totalSalaires = 0;
    for(i=0 ; i<salaires.length ; i++){
        var toutsalaires = salaires[i].value;

        totalSalaires = totalSalaires + Number(toutsalaires);
        
    }

ResultatRecette.innerHTML =totalSalaires +" €";
console.log ("Revenus="+ totalSalaires +"€")
}
// fonction Ajouter et additionner les Dépenses Fixes 

function addDepensesFixes(){
var totalDepenses = 0;

for (i=0; i<DepensesFixes.length; i++){
    var toutesDepensesFixes = DepensesFixes[i].value;

    totalDepenses = totalDepenses + Number(toutesDepensesFixes);
}
ResultatDepensesFixes.innerHTML = totalDepenses +" €";
console.log ("Dépenses Fixes = "+ totalDepenses +"€");
}

//fonction ajouter et additionner les dépenses du mois 

function addAchats(){
    var totalAchats= 0;
    for(i=0; i<Achats.length; i++){
        var toutAchats = Achats[i].value;

        totalAchats = totalAchats + Number(toutAchats);
    }

ResultatAchats.innerHTML = totalAchats +" €";
console.log ("Achats ="+ totalAchats +"€");
}
function check(){
    console.log("invalid ok")
    if (task.value.trim() !== ""){
        return true;
    }else{
        erase();
        return false;
    }
    };


// ajouter un Achats dans la liste des achats
function add(){    

    if(!check()){
        alert("veuillez renseigner une tache")
    } else {
    // créer le noeud 
    var li = document.createElement("li"); // création de <li> </li>
    //ajout du contenu dans le noeud li
    //on ajoute un identifiant à LI qu'on incrémante à chaque fois;
    li.id = AchatsId;
    
    //accrocher le noeud <li> en tant qu'enfant du noeud <ul>
AchatsList.appendChild(li);
// quotes alt gr + 7 
// template litéral  de la ligne 20
    li.innerHTML = `
    <input type ="checkbox">
    <span><strong>${toutAchats}</strong><button class="croix">X</button></span>
    `;

    if (AchatsId === null) {
        AchatsId = 0;
    }
    localStorage.setItem(AchatsId,toutAchats);
    // On incrémente l'identifiant pour la prochaine fois
    AchatsId ++;

}};

// Ecouteurs 



document.getElementById("idSubmit").addEventListener('click',function(e){
    e.preventDefault();
    
    console.log("ok");
    var form = document.getElementById("formId");
    form.submit();

});


if(btnAddS !==null){
btnAddS.addEventListener('click',function(){
    
    addSalaires();
    

})};
if(btnAddDF !==null){
btnAddDF.addEventListener('click',function(){
    addDepensesFixes();
})};

if(btnAddA !==null){
btnAddA.addEventListener('click',function(){
    addAchats();
})};


window.addEventListener('keypress',function(e){
    
    if(e.code == 'Enter'){
        addSalaires();
        addDepensesFixes ();
        addAchats();
        add()
    }

    });


// Gestion Connexion ou nouveau compte 
 // Classe a effacer si pas de click sur  newcon

var newcon = document.getElementById('newcon');// bouton Creer un nouveau compte


function display(){
    var Nouveau = document.querySelector('.new');
    if (Nouveau.style.display!="block"){
        Nouveau.style.display ="block";
        console.log("display block");
    }else{
        Nouveau.style.display="none";
    }

}

newcon.addEventListener('click',function(){
    
    display();
    
})

