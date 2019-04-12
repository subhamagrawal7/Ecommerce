function formValidate(e)
{
    let payType = document.getElementById('payType');
	if(payType.value.length > 10){
		alert("Error: Payment Type should be less than 10 characters.");
		payType.focus();
		return false;
    }
    
    alert(`The specified payment method has been added.`);
   	return true;
   	
}