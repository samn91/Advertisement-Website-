function check_feilds()
{
	if ( (document.form1.textfield1.value == "") || (document.form1.textfield3.value=="") ){
		alert("you have an empty input");
		return false;
	}
	return true;
}

function check_password()
{
	if (document.form1.textfield2.value != document.form1.textfield3.value){
		alert("Confirmed password is not equal to password");
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

function run()
{
	if(check_feilds()&&check_email()&&check_password())
		return true;
return false;

}
