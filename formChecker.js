"use strict"
function check()
{
	let val1 = document.getElementById("q1").value;
	let val2 = document.getElementById("q2").value;
	let val3 = document.getElementById("q3").value;
	let user = document.getElementById("email").value;
	let pw = document.getElementById("pass").value;
	let r = /\w{1,}@\w{1,}.com/
	if(val1==="" || val2==="" || val3==="" )
	{
		alert("Item Quantity must be provided.");
		return false;
	}
	else if(val1<0 || val2<0 || val3<0 )
	{
		alert("Item Quantity must be nonegative.");
		return false;
	}
	else if(!r.test(user))
	{
		alert("Please Enter a valid email.");
		return false;
	}
	else if(pw == "")
	{
		alert("Please Enter your password.");
		return false;
	}
	else
	{
		return true
	}
	
}
