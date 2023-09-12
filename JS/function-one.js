let form = document.querySelector("#userForm");
form.addEventListener("submit", displayUser);

function displayUser(e){
    e.preventDefault();
    let input = document.querySelector("#rando-input").value;
    let params = "name="+input;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../operations/function-one.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function(){
        let canvas = document.querySelector("#output");
        canvas.innerHTML = this.responseText;
    }
    xhr.send(params);
}