function get(id){
	return document.getElementById(id);
}
function validateLogin(){
refresh();		
var hasError=false;

	if(get("uname").value==""){
		get("err_uname").innerHTML= "*Username Required";
		get("err_uname").style.color="red";
		hasError=true;
	}
	else if(get("uname").value.length<6){
		get("err_uname").innerHTML= "*Username Should be atleast 6 character Long";
		get("err_uname").style.color="red";
		hasError=true;
	}
	if(get("pass").value==""){
		get("err_pass").innerHTML= "*Password Required";
		get("err_pass").style.color="red";
		hasError=true;
	}
	else if(get("pass").value.length<8){
		get("err_pass").innerHTML= "*Password should be more then 8 characters long";
		get("err_pass").style.color="red";
		hasError=true;
	}
		return !hasError;
	}
function checkUsername(uname){
		//alert(uname.value);
		var uname = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_uname").innerHTML = "";
				}
				else document.getElementById("err_uname").innerHTML = "Not a valid username";
			}
		};
	xhttp.open("GET","checkusername.php?uname="+uname,true);
	xhttp.send();
}
function refresh(){
	get("err_uname").innerHTML = "";
	get("err_pass").innerHTML = "";	
}