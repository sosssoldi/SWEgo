function addActor() 
{
	let actorsList = document.getElementById('actorsList');
	// Accodo il nuovo attore alla lista
	let node = document.createElement('li');
	node.innerHTML = '<h3>' + document.getElementById('actorName').value + '</h3><p>' + document.getElementById('actorDescription').value + '</p><a href="#" onClick="removeActor(' + actorsList.getElementsByTagName('li').length + ')">Elimina</a>';
	actorsList.appendChild(node);
	
	// Pulisco il contenuto degli input[type="text"]
	document.getElementById('actorName').value = '';
	document.getElementById('actorDescription').value = '';
	
	//MANCA AJAX
}

//node: indice del nodo da eliminare
function removeActor(node)
{
	let actors = document.getElementById('actorsList').getElementsByTagName('li');
	document.getElementById('actorsList').removeChild(actors[node]);
	
	//Vengono scalati di una unità gli indici degli altri elementi oltre a quello eliminato
	for(let i = node; i < actors.length; i++)
		actors[i].getElementsByTagName('a')[0].setAttribute('onClick', 'removeActor(' + i + ')');
	
	//MANCA AJAX
}