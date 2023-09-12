let form2 = document.querySelector("#userForm2");
form2.addEventListener("submit", displayAdd);

function displayAdd(e){
    e.preventDefault();
    let input = document.querySelector("#input-number").value;
    let input2 = document.querySelector("#input-number-two").value;
    let params = "num1="+input+"&num2="+input2;
    let request = new XMLHttpRequest();
    request.open("POST", "../operations/function-two.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.onload = function(){
        let canvas = document.querySelector("#output2");
        canvas.innerHTML = this.responseText;
    }
    request.send(params);
}