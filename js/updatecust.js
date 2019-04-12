function formValidate(e)
{
    console.log('Hello');
    let firstName = document.getElementById('Last_name');
	if(firstName.value.length > 10){
		alert("Error: First name should be less than 10 characters.");
		firstName.focus();
		return false;
    }
    
    let lastName = document.getElementById('Last_name');
	if(lastName.value.length > 10){
		alert("Error: Last name should be less than 10 characters.");
		lastName.focus();
		return false;
	}

    let address = document.getElementById('Address');
	if(address.value.length > 30){
		alert("Error: Address should be less than 10 characters.");
		address.focus();
		return false;
	}

    let city = document.getElementById('City');
	if(city.value.length > 20){
		alert("Error: City should be less than 20 characters.");
		city.focus();
		return false;
    }
    
    let state = document.getElementById('State');
	if(state.value.length > 20){
		alert("Error: State should be less than 20 characters.");
		state.focus();
		return false;
	}

	let phone = document.getElementById('Phone');
	if(isNaN(phone.value)){
		alert("Error: Phone/Mobile number should be 10 digit.");
		phone.focus();
		return false;
	}

	if(phone.value.length != 10){
		alert("Error: Phone/Mobile number should be 10 digit.");
		phone.focus();
		return false;
	}
	
    alert(`You have been updated.`);
   	return true;
   	
}