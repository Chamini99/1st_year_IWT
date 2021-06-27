function checkPoint(){
	if(document.getElementById("spoint").value == document.getElementById("epoint").value){
		alert("Check your start & End points again!!!");
	return false;
}
	else{
		alert("Success");
		window.location.href = 'table.php';
		return false;
	}
}

