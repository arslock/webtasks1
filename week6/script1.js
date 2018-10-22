function main(event){
	const btn = event.currentTarget;
	if(btn.parentNode.dataset.status === "done"){
		btn.parentNode.dataset.status = "not_done"; 
	}
	else{
		btn.parentNode.dataset.status = "done";
	}
	
	}

let items = document.querySelectorAll("button");
for (let item of items){
		item.addEventListener("click",main);
}
/*var list = document.getElementsByTagName("button");
var spn = document.getElementsByTagName("span");

list[0].onclick=function(){
	spn[0].style.textDecoration = "line-through";
}

list[1].onclick=function(){
	spn[1].style.textDecoration = "line-through";
}

list[2].onclick=function(){
	spn[2].style.textDecoration = "line-through";
}

list[3].onclick=function(){
	spn[3].style.textDecoration = "line-through";
}

list[4].onclick=function(){
	spn[4].style.textDecoration = "line-through";
}*/