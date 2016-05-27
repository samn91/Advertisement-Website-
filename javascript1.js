function check_feilds()
{
	if ( (document.form1.textfield1.value == "") || (document.form1.textfield3.value=="") || (document.form1.textfield4.value=="") ){
		alert("you have an empty mandatory input");
		return false;
	}
	return true;
}

function check_email()
{
	var pos = document.form1.textfield1.value.search(/^[A-Za-z]\w*@[A-Za-z]\w*\.[A-Za-z]{3}$/);
	if (pos != 0){
		alert("The entered Email address is not correct it!");
		return false;
	}
	return true;
}


function check_gps()
{
	var lat = document.form1.textfield3.value;
	var lon = document.form1.textfield4.value;
	if ((lat<=90&&lat>=-90)||(lon<=180&&lon>=-180)){
		alert("The entered gps coordinat is not correct it!");
		return false;
	}
	 var x = lat.split('.');
	var y= x[1].length;
	 if(y<4)
		{alert("The entered gps coordinat is not correct it!");
		return false;
	}
	 var x = lon.split('.');
	var y= x[1].length;
	 if(y<4){
		alert("The entered gps coordinat is not correct it!");

		return false;}
return true;
}

function run1()
{
	if(check_feilds()&&check_email()&&check_gps())
		return true;
return false;
}
