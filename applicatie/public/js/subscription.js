var images = ['Bubbles-1.png', 'Bubbles-2.png', 'Bubbles-3.png'];
var openModal;

$(document).ready(function () {
    $('.card-subscription').each(function (i, obj) {
        var image = images[Math.floor(Math.random() * images.length)];
        obj.style.backgroundImage = `url(../assets/${image})`;
    });

    var btnBasic = document.getElementById("btnBasic")
    var btnPremium = document.getElementById("btnPremium")
    var btnPro = document.getElementById("btnPro")
    var btnCloseModalBasic = document.getElementById("btnCloseModalBasic")
    var btnCloseModalPremium = document.getElementById("btnCloseModalPremium")
    var btnCloseModalPro = document.getElementById("btnCloseModalPro")

    btnBasic.onclick = function () {
        toggleModal(document.getElementById("modal-Basic"))
    }

    btnPremium.onclick = function () {
        toggleModal(document.getElementById("modal-Premium"))
    }

    btnPro.onclick = function () {
        toggleModal(document.getElementById("modal-Pro"))
    }

    btnCloseModalBasic.onclick = function () {
        toggleModal(openModal)
    }

    btnCloseModalPremium.onclick = function () {
        toggleModal(openModal)
    }

    btnCloseModalPro.onclick = function () {
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

window.onclick = function (event) {
    if (event.target == openModal) {
        openModal.style.display = "none";
    }
}

