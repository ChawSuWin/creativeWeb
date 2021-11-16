'use strict';

const mainNav = document.getElementById('mainNav');
const title =  document.getElementById('title').textContent;
		
if(title !== 'Creative Web | Home'){
	mainNav.classList.add('navbar-other');
}