function validate() {
	var result=true;
	var x=document.getElementsByTagName('input');
	if (x[0].value.length==0){
		result false;
		alert("enter first name");
	}
	elseif(x[1].value.length==0){
		result false;
		alert("enter last name");
	}
	elseif(x[2].value.length<6){
		result false;
		alert("enter valid password");
	}
	elseif(x[3].length.value==0){
		result false;
		alert("enter valid email");
	}
	return(result);
}