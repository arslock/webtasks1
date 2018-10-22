let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};



for(let cry of countries){
	let countryItem = document.createElement("option");
	countryItem.textContent = cry;
	document.querySelector("#countries").appendChild(countryItem);
}


function loadCountries(){

	let countries = document.querySelector("#countries");
	let cr = countries.value;
	let arr = cities_by_country[cr];

	let citiesItem = document.createElement("option");
	let selecc = document.getElementById("cities");
	for(i = 1; i< arr.length; i++){
			selecc.remove(i);
	}

	for(i = 0; i < arr.length; i++){
		citiesItem.textContent = arr[i];
		document.querySelector("#cities").appendChild(citiesItem);
	}

}

let countriesq = document.querySelector("#countries");
countriesq.addEventListener("change", loadCountries);





