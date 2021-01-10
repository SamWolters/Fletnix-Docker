var store;
var toggle = function (name) {
    var clickedEllement = document.getElementsByName(name)[0];
    var clickedbutton = document.getElementsByName(name)[1];
    if (clickedbutton.innerHTML != "Done Editing") {
        store = clickedbutton.innerHTML;
    }
    else {
        var value = clickedbutton.innerHTML;
    }
    var check = clickedEllement.getAttribute("readonly");
    console.log(store);
    toggleEdit(name, check, clickedEllement, clickedbutton, value);
}





function toggleEdit(obj, att, element, button, value) {
    if (att == "readonly") {
        button.innerHTML = "Done Editing";
        switch (obj) {
            case "mailing":
                element.setAttribute("type", "email");
                break;
            case "end_sub":
                element.setAttribute("type", "date");
                break;
            case "current_sub":
                element.removeAttribute("disabled");
                break;
            default:
                element.setAttribute("type", "text");

        }
        element.style.backgroundColor = "Lightblue";
        element.removeAttribute("readonly");
    }
    else {
        element.setAttribute("readonly", "readonly");
        element.style.backgroundColor = "var(--white)";
        button.innerHTML = store;
        if (obj == "passcode") {
            element.setAttribute("type", "password");
        }
        if (obj == "current_sub") {
            element.setAttribute("disabled", "disabled");
        }

    }
}