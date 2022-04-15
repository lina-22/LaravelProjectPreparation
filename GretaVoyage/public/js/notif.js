//Cible la div qui pour id notif
let divNotif = document.querySelector("#notif");

//Si la notif existe
if (divNotif) {
    //Alors au bout de 5000 milisecondes

    setTimeout(function () {
        //On fait disparaitre la notification
        divNotif.style.display = "none"
    }, 5000)
}
