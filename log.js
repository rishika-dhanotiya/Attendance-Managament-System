function log(){
   var name=document.logmas.name;
   if(caddr(name)){
	   return true;
   }
   return false;
}

function caddr(x)
{
	var numbers=/^[a-zA-z0-9, ]+$/;
	if(x.value.match(numbers))
	{
		return true;
	}
	else
		echo "Invalid Input";
	     return false;
}