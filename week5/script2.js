function h(e){
	 var imgReplace =document.getElementsByTagName("img")[0].src = e.target.src;
	 imgReplace.style.visibility = "visible";
}


document.body.addEventListener('click', h);

