function formValidate(e)
{
    let Pay_type = document.getElementById('Pay_type');
	if(Pay_type.value.length > 10){
		alert("Error: Payment type should be less than 10 characters.");
		Pay_type.focus();
		return false;
    }
    
    alert(`The specified payment method has been updated.`);
   	return true;
   	
}