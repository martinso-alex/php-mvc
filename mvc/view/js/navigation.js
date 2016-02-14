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

var active = function(){
	var url = window.location.href;
	if(url.indexOf('/instituto') > 0){
		$('#inst-nav').css('border-bottom','5px solid #2980b9');
		$('#dept-nav:hover').css('border-bottom','5px solid #ecf0f1');
		$('#curs-nav:hover').css('border-bottom','5px solid #ecf0f1');
		$('#menu li').css('padding-bottom','5px');
	}else if(url.indexOf('/departamento') > 0){
		$('#dept-nav').css('border-bottom','5px solid #2980b9');
		$('#inst-nav:hover').css('border-bottom','5px solid #ecf0f1');
		$('#curs-nav:hover').css('border-bottom','5px solid #ecf0f1');
		$('#menu li').css('padding-bottom','5px');
	}else if(url.indexOf('/curso') > 0){		
		$('#curs-nav').css('border-bottom','5px solid #2980b9');
		$('#inst-nav:hover').css('border-bottom','5px solid #ecf0f1');
		$('#dept-nav:hover').css('border-bottom','5px solid #ecf0f1');
		$('#menu li').css('padding-bottom','5px');
	}
}

$(document).ready(inst_nav);
$(document).ready(dept_nav);
$(document).ready(curs_nav);
$(document).ready(logo_nav);
$(document).ready(active);