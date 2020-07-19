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
	function validate(){
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


   function press(){
    document.getElementById("here").style.color="red";

    document.write("success");
   };

function submit(){
	var age=document.getElementById("age").value;
	if(age<10){
		document.getElementById("age").style.color="red";

	}else{
		
		document.getElementById("age").style.color="green";
	};
};
function book(title,auther){
	this.title=title;
	this.auther=auther;
};
document.getElementById('loc').style.color="white";