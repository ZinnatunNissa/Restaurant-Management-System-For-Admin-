function get(id){
	return document.getElementById(id);
}	
function validateDeliveryman(){
refresh();
var hasError=false;
	if(get("name").value==""){
		get("err_name").innerHTML= "*Name Required";
		get("err_name").style.color="red";
		hasError=true;
	}
	if(get("email").value==""){
		get("err_email").innerHTML= "*Email Required";
		get("err_email").style.color="red";
		hasError=true;
	}
	if(get("phone").value==""){
		get("err_phone").innerHTML= "*Phone Number Required";
		get("err_phone").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("phone").value)){
		get("err_phone").innerHTML= "*Phone Number Should Contain Numeric value Only";
		get("err_phone").style.color="red";
		hasError=true;
	}
	if(get("address").value==""){
		get("err_address").innerHTML= "*Address Required";
		get("err_address").style.color="red";
		hasError=true;
	}
	if(!get("jday").checked){
		get("err_jday").innerHTML= "*Select Shipping Day";
		get("err_jday").style.color="red";
		hasError=true;
	}
	if(!get("jmon").checked){
		get("err_jmon").innerHTML= "*Select Shipping Month";
		get("err_jmon").style.color="red";
		hasError=true;
	}
	if(!get("jyr").checked){
		get("err_jyr").innerHTML= "*Select Shipping Year";
		get("err_jyr").style.color="red";
		hasError=true;
	}
	if((!get("1").checked) && (!get("2").checked)){
		get("err_gender").innerHTML= "*Select Gender";
		get("err_gender").style.color="red";
		hasError=true;
	}
	if(get("nid").value==""){
		get("err_nid").innerHTML= "*NID Required";
		get("err_nid").style.color="red";
		hasError=true;
	}
		return !hasError;
	}

function refresh(){
	get("err_name").innerHTML = "";
	get("err_email").innerHTML = "";
	get("err_phone").innerHTML = "";
	get("err_address").innerHTML = "";
	get("err_jday").innerHTML = "";
	get("err_jmon").innerHTML = "";
	get("err_jyr").innerHTML = "";
	get("err_gender").innerHTML = "";
	get("err_nid").innerHTML = "";
}