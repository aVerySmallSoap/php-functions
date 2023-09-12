let form3 = document.querySelector("#userForm3");
form3.addEventListener("submit", displayAdd);

function displayAdd(e){
    e.preventDefault();
    let input = document.querySelector("#sess-input").value;
    let params = "session="+input;
    let request = new XMLHttpRequest();
    request.open("POST", "../operations/function-three.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.onload = function(){
        let canvas = document.querySelector("#output3");
        canvas.innerHTML = this.responseText;
    }
    request.send(params);
}