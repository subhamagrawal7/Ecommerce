function formValidate(e)
{
    console.log('Hello');
	let Prod_name = document.getElementById('Prod_name');
	if(Prod_name.value.length > 20){
		alert("Error: Product name should be less than 10 characters.");
		Prod_name.focus();
		return false;
    }
    
    let Category = document.getElementById('Category');
	if(Category.value.length > 10){
		alert("Error: The name of the product category should be less than 10 characters.");
		Category.focus();
		return false;
	}

    alert(`You product has been updated.`);
   	return true;
   	
}