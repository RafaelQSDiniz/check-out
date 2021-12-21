const btnLogin = document.querySelector(".btn-login");
const form = document.querySelector("form");

btnLogin.addEventListener("click",(event) => {
	event.preventDefault();

	form.classList.add("form-hide");
});

form.addEventListener("animationstart", event =>{
	if (event.animationName === "down") {document.querySelector("body").style.overflow = "hidden"}
});

form.addEventListener("animationend", () =>{
	if (evente.animationName === "down"){
		form.style.display = "none";
		document.querySelector("body").style.overflow = "none";
	}
});

/*nackground squares*/

const ulSquares = document.querySelector("ul.squares")

for (let i = 0; i < 11 ; i++) {
	const li = document.createElement("li");

	const size = Math.floor(Math.random() * (120 - 10) + 10);
	const position = Math.random() * (99 - 1) + 1;
	const delay = Math.random() * (5 - 0.1) + 0.1;
	const duration = Math.random() * (12 - 6) + 6;

	li.style.width =  size + 'px';
	li.style.height = size + 'px';
	li.style.bottom = -size + 'px';

	li.style.left = position +'%';

	li.style.animationDelay = delay + "s";
	li.style.animationDuration = duration + "s";
	    
	ulSquares.appendChild(li);
} 
