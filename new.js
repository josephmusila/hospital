function log(){
	alert("login first");
}
function thanks(){
	alert("thankyou for visiting enjoy our offers")
}
var pEelement=document.getElementById("demo");
pElement.parentElement.style.background="brown";
function validateForm(){
	var password=document.getElementsByName("password")[0].value;
	var length= password.length;
	if(length>8){
		alert("use only 8 characters");
		return false;
	}
}