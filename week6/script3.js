let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];
let arr2 = {Toyota:0,BMW:1,Daewoo:2};

const car = document.querySelector('#cars');

for(let i=0; i<cars.length; i++){
let div = document.createElement('div');
let img = document.createElement('img');
img.id = cars[i].brand;
img.src = cars[i].image_url;

img.style = "width: 200px; margin:5px";
div.appendChild(img);

car.appendChild(div);
}


const imeg = document.querySelectorAll("img");
for(const im of imeg){
	im.addEventListener('click', ars)
}
let used = "not_used";
let result = 0;
//let arr = {Toyota:2,BMW:2,Daewoo:2};
function ars(){

	let cT = event.currentTarget;
	let s = cT.id;
	let items = document.querySelector("#items");
	let summ = document.querySelector("#sum");
	if(used=="not_used"){
		result = parseInt(summ.innerHTML)+parseInt(cars[arr2[s]].price);
	items.innerHTML =  parseInt(items.innerHTML)+1;
	
	}
	else if(used == "used"){
		result = parseInt(summ.innerHTML)-parseInt(cars[arr2[s]].price);
	items.innerHTML =  parseInt(items.innerHTML)-1;
	used = "not_used";
	}
	summ.innerHTML = result;
	
}

/*
for(var i=0;i<cars.length;i++){
	var div = document.createElement('div');
	var img = document.createElement('img');
	img.id = cars[i].brand;
	img.src = cars[i].image_url;
	var p = document.createElement('p');
	p.text = cars[i].brand+" "+cars[i].model;
	img.style = "position:relative;width:300px;margin:5px;";
	div.appendChild(img);
	p.style.paddingTop="5px";
	div.appendChild(p);
	car.appendChild(div);
}
const buttons = document.querySelectorAll('img');
for(const button of buttons){
	button.addEventListener('click',ars);
}
let arr = {Toyota:2,BMW:2,Daewoo:2};
var text=0;
function ars(){
	var s1 = document.querySelector('#items');
	var s2 = document.querySelector('#sum');
	var q = event.currentTarget;
	var v = q.id;
	if(arr[v]==2){
		text = parseInt(s2.innerHTML)+parseInt(cars[arr2[v]].price);
		s1.innerHTML = parseInt(s1.innerHTML)+1;
		arr[v]=3;
		
	}
	else if(arr[v]==3){
		text = parseInt(s2.innerHTML)-parseInt(cars[arr2[v]].price);
		s1.innerHTML = parseInt(s1.innerHTML)-1;
		arr[v]=2;
	}
	s2.innerHTML=text;
}*/