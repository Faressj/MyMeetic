window.onload = () =>{
    const inscription = document.querySelector(".titleinscription");
    const connexion = document.querySelector(".titleconnexion");
    const formulaires = document.querySelector(".formulaires");

    var formulaireconnexion = document.querySelector(".formulaireconnexion");
    var formulaireinscription=document.querySelector(".formulaireinscription");
    inscription.addEventListener("click", ()=>{
        formulaireinscription.style.display = "block";
        formulaireconnexion.style.display = "none";
        formulaires.style.height = "50em";
        inscription.style.backgroundColor = "red";
        connexion.style.backgroundColor = "grey";
    });
    connexion.addEventListener("click", ()=>{
        formulaireinscription.style.display = "none";
        formulaireconnexion.style.display = "block";
        formulaires.style.height = "15em";
        inscription.style.backgroundColor = "grey";
        connexion.style.backgroundColor = "red";
    });
};