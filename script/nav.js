function hideMenu()
{
	let menu = document.getElementsByTagName('nav')[0];
	menu.style.display = 'none';
	let hamburger = document.getElementsByClassName('mobileMenu')[0];
	hamburger.setAttribute('onclick', 'showMenu();');
}

function showMenu()
{
	let menu = document.getElementsByTagName('nav')[0];
	menu.style.display = 'block';
	let hamburger = document.getElementsByClassName('mobileMenu')[0];
	hamburger.setAttribute('onclick', 'hideMenu();');
}