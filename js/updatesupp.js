function formValidate(e)
{
    console.log('Hello');
	let First_name = document.getElementById('First_name');
	if(First_name.value.length > 10){
		alert("Error: First name should be less than 10 characters.");
		First_name.focus();
		return false;
    }
    
	let Last_name = document.getElementById('Last_name');
	if(Last_name.value.length > 10){
		alert("Error: Last name should be less than 10 characters.");
		Last_name.focus();
		return false;
	}

    let Address = document.getElementById('Address');
	if(Address.value.length > 30){
		alert("Error: Address should be less than 10 characters.");
		Address.focus();
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