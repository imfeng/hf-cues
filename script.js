$(function(){
/**MY Enents**/
	function navEvent(mydata){
		var cnt_usr_clicked = 0;
		$('.nav-item').click(function(event) {
			//alert($(this).attr('name'));
			cur_page = $(this).attr('name');
			renewFunc(cur_page,mydata);
			$('.nav-item.active').removeClass('active');
			$(this).addClass('active');
			$('.ui.dimmer.modals').html('');
			/** Google Analysis TEST Functions**/
			gaSendEventFunc('Clicked',cnt_usr_clicked);
			
			cnt_usr_clicked++;
		});
	}
	function modalEvent(){
		$('.more-pic').click(function(event) {
			$('.ui.modal').modal('show');
			/** Google Analysis TEST Functions**/
			gaSendEventFunc('Reveal',cur_page,null);
		});
	}
	function windowResizeEvent(){
		var winW = $(window).width();
		if(winW>768){
			$('.nav-holder').removeClass('dropdown');
		}else{
			$('.nav-holder').addClass('dropdown');
			uiDropdownFunc();
		}
		$(window).resize(function(event) {
			winW = $(window).width();
			if(winW>768){
				$('.nav-holder').removeClass('dropdown');
			}else{
				$('.nav-holder').addClass('dropdown');
				uiDropdownFunc();
			}
		});
	}
/**MY Funcs**/
	function revealFunc(){
		var winHeight = $(window).height();
		$('.winHeight').height(winHeight);

		window.sr = ScrollReveal({ origin : 'right',
									scale       : 0.8,
									delay       : 400,
									reset: false });
		sr.reveal('.revealOnScroll');
	}
	function renewFunc(page,mydata){
    	var ob = 'mydata.'+page;
    	if(page=='cues'){
    		$('#main').html( Mustache.render( $('#atcc_cues').html() , eval(ob) ) );

    	}else{
        	$('#main').html( Mustache.render( $('#atcc_members').html() , eval(ob) ) );
    	}
    	revealFunc();
        modalEvent();
	}
	function uiDropdownFunc(){
		$('.ui.dropdown').dropdown();
	}
/** Google Analysis TEST Functions**/
	function gaScrollBottomEvent(){
		$(window).scroll(function(event) {
			if($(window).scrollTop()+$(window).height() > $(document).height() - 100){
				//alert('Bottom!');
				gaSendEventFunc('Readed','Bottom');
			}
		});
	}
	function gaSendEventFunc(ent,desc){
		if(ga){
			//alert('GA true!');
			ga('send','event',ent,cur_page,desc);
		}
	}

    var atcc_json;
    var cur_page = 'cues';
    $(document).ready(function() {
    	windowResizeEvent();
	    $.get('./atcc_cues.json', function(mydata) {
	    	atcc_json = mydata;
	    	renewFunc('cues',atcc_json);
	    	navEvent(atcc_json);
	    	/** Google Analysis TEST Functions**/
	    	gaScrollBottomEvent();
	    })
	    .fail(function() {
	      alert( "get data.json error" );  // in case something goes wrong with our ajax call
	    });
    });

});
s