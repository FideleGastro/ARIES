// pour mémoriser le dernier ouvert
var open  =  document.querySelector('.open');

// tableau des dt
var alldt =  document.querySelectorAll('dt');

// abonnement d'un écouteur sur un mousedown
for( var i=0; i<alldt.length; i++){
	alldt[i].addEventListener('mousedown', clic_dt);
}

function clic_dt(event){
	open.className="";
	this.nextElementSibling.className = 'open';
	open = this.nextElementSibling;
}