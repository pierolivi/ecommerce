$(document).ready(function()
{

	$("#divchat").find(".btn").click(function(event)
	{
		
		event.preventDefault();
		var form=$(this).closest("form"); //closest remonte pour trouver form
		//console.log(form.attr("action"));
		$.ajax({
			type:"POST",
			url:form.attr("action"),
			data:form.serialize()+"&csrf_test_name="+token_csrf,
			dataType:"json"
			
		}).done(function(resulat)
		{
			//console.log(resulat);
			token_csrf=resultat.csrf;
		});

	});
	setInterval(function(){
	$.ajax({
			type:"GET",
			dataType:"json"


	}).done(function(resultat)
	{
		$('#chatMessages').empty().append(resultat.messages);
	});
	},2000);
});
