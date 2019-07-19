
function checkme(){
	var stdname=document.stmas.stdname;
	var rollno=document.stmas.rollno;
	var cour=document.stmas.cour;
	var sem=document.stmas.sem;
	var contact_no=document.stmas.contact_no;
	var addr=document.stmas.addr;
	//alert(stnm.value+","+roll.value+" "+crs.value+" "+sem.value+" "+con.value+" "+add.value);
	if(allLetters(stdname)){
		if(alphaNumeric(rollno)){
			if(allLetters(cour)){
				if(allNumeric(sem)){
					if(allNumeric(contact_no)){
						if(caddr(addr)){
							return true;
						}
					}
				}
			}
		}
	}
	
	return false;
}



function allLetters(x){
	//alert("inside");
	var letter=/^[a-zA-Z ]+$/;
	if(x.value.match(letter)){
		//alert("inside Letters");
		return true;
	}
	else{
		alert("Invalid input..please enter alphabets");
		return false;
	}
}

function alphaNumeric(x){
	//alert("inside");
	var numbers=/^[0-9a-zA-Z, -]+$/;
	if(x.value.match(numbers)){
	//	alert("inside numbers");
		return true;
	}
	else{
		alert("Invalid input..please enter alphanumeric digit");
		return false;
	}
}

function allNumeric(x){
	//alert("inside");
	var numbers=/^[0-9]+$/;
	if(x.value.match(numbers)){
	//	alert("inside numbers");
		return true;
	}
	else{
		alert("Invalid input..please enter numeric digit");
		return false;
	}
}
function caddr(x){
	//alert("inside");
	var numbers=/^[a-zA-Z0-9, ]+$/;
	if(x.value.match(numbers)){
		//alert("inside address");
		return true;
	}
	else{
		alert("Invalid input..please enter valid data");
		return false;
	}
}