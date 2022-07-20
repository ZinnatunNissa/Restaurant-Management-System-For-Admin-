function get(id){
	return document.getElementById(id);
}	
function validateIncome(){
refresh();
var hasError=false;
	if(get("rent").value==""){
		get("err_rent").innerHTML= "*Insert Rent Expense";
		get("err_rent").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("rent").value)){
		get("err_rent").innerHTML= "*Rent expenses should contain Numeric values only";
		get("err_rent").style.color="red";
		hasError=true;
	}
	if(get("tax").value==""){
		get("err_tax").innerHTML= "*Insert Tax";
		get("err_tax").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("tax").value)){
		get("err_tax").innerHTML= "*Tax should contain Numeric values only";
		get("err_tax").style.color="red";
		hasError=true;
	}
	if(get("fcost").value==""){
		get("err_fcost").innerHTML= "*Insert Food Expenses";
		get("err_fcost").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("fcost").value)){
		get("err_fcost").innerHTML= "*Food Expenses should contain Numeric values only";
		get("err_fcost").style.color="red";
		hasError=true;
	}
	if(get("utilities").value==""){
		get("err_utilities").innerHTML= "*Insert Utility Bill";
		get("err_utilities").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("utilities").value)){
		get("err_utilities").innerHTML= "*Utility Bill should contain Numeric values only";
		get("err_utilities").style.color="red";
		hasError=true;
	}
	if(get("expenses").value==""){
		get("err_expenses").innerHTML= "*Insert Expenses";
		get("err_expenses").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("expenses").value)){
		get("err_expenses").innerHTML= "*Expenses should contain Numeric values only";
		get("err_expenses").style.color="red";
		hasError=true;
	}
	if(get("ccost").value==""){
		get("err_ccost").innerHTML= "*Insert Catering Expenses";
		get("err_ccost").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("ccost").value)){
		get("err_ccost").innerHTML= "*Catering Expenses should contain Numeric values only";
		get("err_ccost").style.color="red";
		hasError=true;
	}
	if(get("dcost").value==""){
		get("err_dcost").innerHTML= "*Insert Delivery Charge";
		get("err_dcost").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("dcost").value)){
		get("err_dcost").innerHTML= "*Delivery Charge should contain Numeric values only";
		get("err_dcost").style.color="red";
		hasError=true;
	}
	if(get("totalcost").value==""){
		get("err_totalcost").innerHTML= "*Insert Total Cost";
		get("err_totalcost").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("totalcost").value)){
		get("err_totalcost").innerHTML= "*Total Cost should contain Numeric values only";
		get("err_totalcost").style.color="red";
		hasError=true;
	}
	if(get("totalincome").value==""){
		get("err_totalincome").innerHTML= "*Insert Total Income";
		get("err_totalincome").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("totalincome").value)){
		get("err_totalincome").innerHTML= "*Total Income should contain Numeric values only";
		get("err_totalincome").style.color="red";
		hasError=true;
	}
	if(get("profit").value==""){
		get("err_profit").innerHTML= "*Insert Your Profit";
		get("err_profit").style.color="red";
		hasError=true;
	}
	else if(isNaN(get("profit").value)){
		get("err_profit").innerHTML= "*Profit should contain Numeric values only";
		get("err_profit").style.color="red";
		hasError=true;
	}
		return !hasError;
	}

function refresh(){
	get("err_rent").innerHTML = "";
	get("err_tax").innerHTML = "";
	get("err_fcost").innerHTML = "";
	get("err_utilities").innerHTML = "";
	get("err_expenses").innerHTML = "";
	get("err_ccost").innerHTML = "";
	get("err_dcost").innerHTML = "";
	get("err_totalcost").innerHTML = "";
	get("err_totalincome").innerHTML = "";
	get("err_profit").innerHTML = "";
}