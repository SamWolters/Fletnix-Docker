var images = [ 'bubbles-1.png', 'bubbles-2.png', 'bubbles-3.png'];
var openModal;

$(document).ready(function() {
    $('.card-subscription').each(function(i, obj) {
        var image = images[Math.floor(Math.random() * images.length)];
        obj.style.backgroundImage = 'url(../assets/' + image + ')';
    });

    var btnBasic = document.getElementById("btnBasic")
    var btnNormal = document.getElementById("btnNormal")
    var btnPremium = document.getElementById("btnPremium")
    var btnCloseModalBasic = document.getElementById("btnCloseModalBasic")
    var btnCloseModalNormal = document.getElementById("btnCloseModalNormal")
    var btnCloseModalPremium = document.getElementById("btnCloseModalPremium")

    btnBasic.onclick = function () {
        toggleModal(document.getElementById("modal-Basic"))
    }

    btnNormal.onclick = function () {
        toggleModal(document.getElementById("modal-Normal"))
    }

    btnPremium.onclick = function () {
        toggleModal(document.getElementById("modal-Premium"))
    }

    btnCloseModalBasic.onclick = function () {
        toggleModal(openModal)
    }

    btnCloseModalNormal.onclick = function () {
        toggleModal(openModal)
    }

    btnCloseModalPremium.onclick = function () {
        toggleModal(openModal)
    }
});

function toggleModal(element) {
    if (element.style.display == "none") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }

    openModal = element;
}

window.onclick = function(event) {
    if (event.target == openModal) {
        openModal.style.display = "none";
    }
}

