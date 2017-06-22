function addActor()
{
	let selector = document.getElementById('insertActorsSelectorUC');
	let actor = document.createElement("option");
	actor.text = selector.value;
	actor.setAttribute('selected', 'selected');
	selector.remove(selector.selectedIndex);
	document.getElementById('insertUCSelectedActors').add(actor);
}

function removeActor()
{
	let selected = document.getElementById('insertUCSelectedActors');
	for(let i=0; i<selected.length; ++i)
		if(selected[i].selected) console.log(selected[i]);
}