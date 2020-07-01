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
	function validEmail(){
		var email=document.myform.email.value;
		atpos=emailID.indexOf("@");
		dotpos=emailId.lastIndexOf(".");
		
		if(atpos<1||(dotpos - atpos<2) ){
			alert("please enter correct email id");
			document.myform.email.focus();
			return false;
		}
		return (true);
	}
}
$(document).ready(function(){
	$("li").eq(0).css("color","green");
	$("li").eq(3).css("font-size","30px");
	$("ul").css("background-color","blue");
	$("ul").css("max-width","fit-content");
	$("ul").css("margin-left","100px");
});
function validateForm() {
                var password = document.getElementsByName("password")[0].value;
                var length = password.length;
                if (length > 8) {
                    alert("use only 8 characters");
                    return false;
                }
            }