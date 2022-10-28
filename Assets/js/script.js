function validateForm(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;

	if (username == "admin" && password == "123"){
		alert("Login succesful!, Hello " + username + "!");
		window.location.href = "index.html";
		return true;
 	} else {
		alert("Login failed!");
		return false;
	}
}
