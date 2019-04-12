function formValidate(e)
{
    let fname = document.getElementById('fname');
	if(fname.value.length > 10){
		alert("Error: First name should be less than 10 characters.");
		fname.focus();
		return false;
    }
    
    let lname = document.getElementById('lname');
	if(lname.value.length > 10){
		alert("Error: Last name should be less than 10 characters.");
		fname.focus();
		return false;
	}

    let Address = document.getElementById('Address');
	if(Address.value.length > 30){
		alert("Error: Address should be less than 30 characters.");
		Address.focus();
		return false;
	}

    let City = document.getElementById('City');
	if(City.value.length > 20){
		alert("Error: City should be less than 20 characters.");
		City.focus();
		return false;
    }
    
    let State = document.getElementById('State');
	if(State.value.length > 20){
		alert("Error: State should be less than 20 characters.");
		State.focus();
		return false;
	}

	let Phone = document.getElementById('Phone');
	if(isNaN(Phone.value)){
		alert("Error: Phone/Mobile number should be 10 digit.");
		Phone.focus();
		return false;
	}

	if(Phone.value.length != 10){
		alert("Error: Phone/Mobile number should be 10 digit.");
		Phone.focus();
		return false;
	}
	
    alert(`Welcome ${fname.value} ${lname.value} you have benn added as a new user.`);
   	return true;
   	
}