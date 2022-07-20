function get(id){
	return document.getElementById(id);
}
function validateMenu(){
refresh();		
var hasError=false;

	if(get("fname").value==""){
		get("err_fname").innerHTML= "*Foodname Required";
		get("err_fname").style.color="red";
		hasError=true;
	}
	if(get("pp").value==""){
		get("err_pp").innerHTML= "*Insert Food Price";
		get("err_pp").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("pp").value)){
		get("err_pp").innerHTML= "*Food Price should contain Numeric values only";
		get("err_pp").style.color="red";
		hasError=true;
	}
	if(get("type").value==""){
		get("err_type").innerHTML= "*Catagory Required";
		get("err_type").style.color="red";
		hasError=true;
	}
		return !hasError;
	}
function refresh(){
	get("err_fname").innerHTML = "";
	get("err_pp").innerHTML = "";
	get("err_type").innerHTML = "";
}