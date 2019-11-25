function btn(){
	alert("Hello, world!");
} 

function resize(){
	var txt = document.getElementById("text");
	txt.style.fontSize = "24pt";
}

function alert(){
	var txt = document.getElementById("text");
	var bling = document.getElementById("bling");

	if(bling.checked === true){
		txt.style.color = "green";
		txt.style.fontWeight = "bold";
		txt.style.textDecoration = "underline";
	}

	else{
		txt.style.textDecoration = "none";
		txt.style.fontWeight = "normal";
		txt.style.color = "black";
	}
}

function snoff(){
	var txt = document.getElementById("text");
	txt.value = txt.value.toUpperCase();

	var s = txt.value.split(".");
	txt.value = s.join("-izzle.");
}

