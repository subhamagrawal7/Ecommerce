function formValidate(e)
{
    let pname = document.getElementById('pname');
	if(pname.value.length > 20){
		alert("Error: Product name should be less than 20 characters.");
		pname.focus();
		return false;
    }
    
    let pCategory = document.getElementById('pCategory');
	if(pCategory.value.length > 10){
		alert("Error: Name of product category should be less than 10 characters.");
		pCategory.focus();
		return false;
	}

    alert(`The ${pname.value} product has been added.`);
   	return true;
   	
}