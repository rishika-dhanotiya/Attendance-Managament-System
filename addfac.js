function check(){
	var fname=document.facmas.fname;
	var subj=document.facmas.subj;
	
	if(allLetters(fname)){
		if(allLetters(subj)){
	   return true;
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

