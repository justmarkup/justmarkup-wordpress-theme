var mustard=false; 

if('visibilityState' in document){
	document.documentElement.className='js';
	mustard=true
} else {
	document.documentElement.className = 'oldie';
}
