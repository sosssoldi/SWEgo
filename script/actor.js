function addActor() 
{
	let actors_list = document.getElementById('actors_list');
	// Accodo il nuovo attore alla lista
	let node = document.createElement('li');
	node.innerHTML = '<h3>' + document.getElementById('nome').value + '</h3><p>' + document.getElementById('descrizione').value + '</p><a href="#" onClick="removeActor(' + actors_list.getElementsByTagName('li').length + ')">Elimina</a>';
	actors_list.appendChild(node);
	
	// Pulisco il contenuto degli input[type="text"]
	document.getElementById('nome').value = '';
	document.getElementById('descrizione').value = '';
	
	//MANCA AJAX
}

//node: indice del nodo da eliminare
function removeActor(node)
{
	let actors = document.getElementById('actors_list').getElementsByTagName('li');
	document.getElementById('actors_list').removeChild(actors[node]);
	
	//Vengono scalati di una unità gli indici degli altri elementi oltre a quello eliminato
	for(let i = node; i < actors.length; i++)
		actors[i].getElementsByTagName('a')[0].setAttribute('onClick', 'removeActor(' + i + ')');
	
	//MANCA AJAX
}