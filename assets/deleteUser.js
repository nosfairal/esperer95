function approuveUser() {
    let xmlhttp = new XMLHttpRequest;
    xmlhttp.open("POST", "http://127.0.0.1:8000/user/" + this.dataset.id);
    xmlhttp.send();
}

function init1() {
    let buttonsUsers = document.querySelectorAll(".form-check-input");
    for (let buttonsUser of buttonsUsers) {
        buttonsUser.addEventListener("click", app_user_delete);
    }
}

window.onload = () => { init1(); };
