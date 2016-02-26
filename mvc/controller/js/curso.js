var ler = function(){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/CursoController.php',
		data: {func:'ler'},
		success: function(data){
			$('#curs-view').html(data);
		},
		error: function(jqXHR,textStatus,errorThrown){
			console.log(errorThrown);
		}
	});
}

var criar = function(){
	$(document).on('click','#add', function(){

		var nome = $('#criar-curs').val();
		var dura = $('#criar-dura').val();
		var cred = $('#criar-cred').val();
		var dept_id = $('#criar-curs-dept').val();
		
		$.ajax({
			type: "POST",
			url: '../mvc/controller/CursoController.php',
			data: {func:'criar',nome:nome,dura:dura,cred:cred,dept_id:dept_id},
			success: function(data){
				if(data != 'nope'){
					$('#curs-view').html(data);
					var alert = '<div class=\"alert alert-info\">';
					alert += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					alert += 'Curso adicionado com sucesso!';
					alert += '</div>';
					$('#alert').html(alert);
				}else{
					var alert = '<div class=\"alert alert-danger\">';
					alert += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					alert += 'Já existe um curso com esse nome ou algum campo está vazio!';
					alert += '</div>';
					$('#alert').html(alert);
				}
			}
		});
	});
}

var deletar = function(){
	$(document).on('click','.remove', function(){
		var id = $(this).parent().parent().attr('id');
		
		if(confirm('Tem certeza que deseja deletar esse curso?')){
			$.ajax({
				type: "POST",
				url: '../mvc/controller/CursoController.php',
				data: {func:'deletar',id:id},
				success: function(data){
					$('#curs-view').html(data);
				}
			});
		}
	});
}

var alterar = function(){

}

var cancela_alteracao = function(){

}

var confirma_alteracao = function(){

}

$(document).ready(ler);
$(document).ready(criar);
$(document).ready(deletar);
//$(document).ready(alterar);
//$(document).ready(cancela_alteracao);
//$(document).ready(confirma_alteracao);