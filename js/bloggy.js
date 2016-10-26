$(document).ready(function() {
	$("form").submit(function(eve){
		eve.preventDefault(); //annuler le comportement par defaut
		$.ajax({
			method: "POST",
			url : "contact_action.php",
			data : {
			email : $("#email").val(),
			sujet : $("#sujet").val(),
			message	: $("#message").val(),
			newsletter: ($("#newsletter").prop('checked'))?1:0

			},
		success : function(data) {
			if(data.retour==1)
				var msg="Voilà, votre Sujet "+data.sujet+" a été bien envoyé";
			else
				var msg="Erreur! veuillez réussayer";
			$("#notif").html(msg).show();
		console.log(data)
		}
		});

	});
});
