function ModifSelect()
{
	if(document.getElementById('selectmodif').value=="Photo")
	{
		document.getElementById('newval').type="file";
	}
	
	else
	{
		document.getElementById('newval').type="text";
	}
}

