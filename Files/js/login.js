
// Cargar archivo clave pública

$(".custom-file-input").on("change", function() {

	var fileName = $(this).val().split("\\").pop();

	if (fileName.length>=32){
	fileName = fileName.slice(1,32) + "...";
	}

	else if (fileName.length==0){
	fileName = "Archivo no seleccionado";
	}

	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);

});


/* Desaparecer login y aparecer registro */

function transitions(a,e){

	$(a).fadeOut('slow', function(){
        $(e).fadeIn('slow');
        
    });

}

// Si hace click en el enlace de registro
$('#link-register').click(function(e){
	transitions('#form-login','#form-register');
});

// Si hace click en el enlace de inicio de sesion
$('#link-login').click(function(e){  
	transitions('#form-register','#form-login');
});