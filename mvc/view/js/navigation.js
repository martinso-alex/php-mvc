var inst_nav = function(){
	$(document).on('click','#inst-nav', function(){
		window.location.href = '../instituto';
	});
}

var dept_nav = function(){
	$(document).on('click','#dept-nav', function(){
		window.location.href = '../departamento';
	});
}

var curs_nav = function(){
	$(document).on('click','#curs-nav', function(){
		window.location.href = '../curso';
	});
}

var logo_nav = function(){
	$(document).on('click','#logo-nav', function(){
		window.location.href = '..'
	});
}

$(document).ready(inst_nav);
$(document).ready(dept_nav);
$(document).ready(curs_nav);
$(document).ready(logo_nav);