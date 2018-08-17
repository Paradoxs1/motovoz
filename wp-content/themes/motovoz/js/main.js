function isValidName(name) {
	if (!(name == '')) {
		if (!(/[a-zA-ZА-Я\-а-я]+/.test(name.val()))) {
			name.addClass('red-border');
			return false;
		}
		name.removeClass('red-border');
		return true;
	}
	name = 'name';
	return true;
}
function isValidPhone(phone) {
	if (!(phone == '')) {
		if (!(/\+?\d+\ ?\(?\d+\)?\ ?\d+\ ?\d+\ ?\d+/.test(phone.val()))) {
			phone.addClass('red-border');
			return false;
		}
		phone.removeClass('red-border');
		return true;
	}
	phone = '0000000000';
	return true;
}

function isValidText(text) {
	if (!(text == '')) {
		if (!(/.{10,}/.test(text.val()))) {
			text.addClass('red-border');
			return false;
		}
		text.removeClass('red-border');
		return true;
	}
	text = '0000000000';
	return true;
}

function getName (str){
    if (str.lastIndexOf('\\')){
        var i = str.lastIndexOf('\\')+1;
    }
    else{
        var i = str.lastIndexOf('/')+1;
    }						
    var filename = str.slice(i);			
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
}

jQuery(document).ready(function(){
	
	jQuery('#menu a').each(function () {
		if ( this.href == location.href){
			jQuery(this).addClass('active');
		};
	});
	
	jQuery('.review-content .hide').remove();
	
	jQuery('.form-submit').next().next().remove();
	
	
    jQuery(".toggle-block").click(function () {
        jQuery('.toggle-mnu').toggleClass("on");
        jQuery(".main-mnu").slideToggle();
        jQuery('#menu').slideToggle(500);
        return false;
    });

	jQuery('.phone ').mask('+7-(000)-000-00-00');
	
	jQuery("#modal-form" ).find('.submit').click(function() {
		isValidName(jQuery(this ).parent().find(".name"));
		isValidPhone(jQuery(this ).parent().find(".phone"));
		isValidText(jQuery(this ).parent().find("textarea"));
		if( isValidName(jQuery(this ).parent().find(".name")) 
			&& isValidPhone(jQuery(this ).parent().find(".phone")) 
		    && isValidText(jQuery(this ).parent().find("textarea")))
		{
			jQuery( this ).parents('form').submit();
		}
		else {
			return false;
		}
	});
	
	jQuery(".accordeon div").hide().prev().click(function() {
	jQuery(this).parents(".accordeon").find("div").not(this).slideUp().prev();
	jQuery(this).next().not(":visible").slideDown().prev();
	});
	
	jQuery(".link-review").on("click","a", function (event) {
        event.preventDefault();
        var id  = jQuery(this).attr('href'),
            top = jQuery(id).offset().top;
        jQuery('body,html').animate({scrollTop: top}, 1500);
    });
	
	jQuery('.image-popup').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom',
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300
		}
	});
	
    jQuery('.inline-popups').magnificPopup({
        delegate: 'a',
        removalDelay: 500,
        callbacks: {
          beforeOpen: function() {
             this.st.mainClass = this.st.el.attr('data-effect');
          }
        },
        midClick: true
      });
	
    jQuery('.faq').find('.rev-label').click(function(){
        jQuery('#review').toggleClass('active');
    });
	
	jQuery('.adress-reset').click(function(){
		jQuery(this).parents('.adress-content').find('input').val('');
	});
	jQuery('.add-adress').click(function(){
		jQuery('.adress-block>div:last-of-type').clone().appendTo('.adress-block');
	});
	
	jQuery(".tab-container .tab").click(function() {
		jQuery(".tab-container .tab").removeClass("active").eq(jQuery(this).index()).addClass("active");
		jQuery(".tab_item").hide().eq(jQuery(this).index()).fadeIn()
	}).eq(0).addClass("active");
	
	jQuery('.time-adress').find('label').click(function(){
		jQuery('.time-adress').find('label').removeClass('active');
		jQuery(this).addClass('active');
	});
	
	jQuery('.summer-reset').find('img').click(function(){
		jQuery('.summer').find('.sum').text('0р');
	});
	
	if (jQuery(window).width() > 769) {
		jQuery(".service-block, .service-top-block, .main-bottom .left, .diagnoz-block:nth-child(odd), .autopark-block:nth-child(odd), .price-block:nth-child(odd), .accordeon, .service-banner-top .section-title, .service-banner-bottom .section-title, .price-banner .section-title, .record-banner-top .section-title, .autopark-banner-top .section-title").animated2("fadeInLeft", "zoomOutDown");
		jQuery(".why-block, .main-bottom .right, .diagnoz-block:nth-child(even), .record-block, .autopark-block:nth-child(even), .price-block:nth-child(even), .faq .right, .service-banner-middle .section-title, .autopark-banner-middle .section-title").animated2("fadeInRight", "zoomOutDown");
		jQuery(".diagnoztic-banner, .record-banner").animated("fadeIn", "fadeOut");
		jQuery(".section-title+.btn-onlain, .service-map .left, .container-video>div, .link-review, #respond").animated("bounce", "fadeOut");
		jQuery(".time p, .transportation p, .driver-block").animated("fadeInUp", "fadeOut");
	}
	
	
	
//	jQuery('select').each(function(){
//    var $this = jQuery(this), numberOfOptions = jQuery(this).children('option').length;
//  
//    $this.addClass('select-hidden'); 
//    $this.wrap('<div class="select"></div>');
//    $this.after('<div class="select-styled"></div>');
//
//    var $styledSelect = $this.next('div.select-styled');
//    $styledSelect.text($this.children('option').eq(0).text());
//  
//    var $list = $('<ul />', {
//        'class': 'select-options'
//    }).insertAfter($styledSelect);
//  
//    for (var i = 0; i < numberOfOptions; i++) {
//        jQuery('<li />', {
//            text: $this.children('option').eq(i).text(),
//            rel: $this.children('option').eq(i).val()
//        }).appendTo($list);
//    }
//  
//    var $listItems = $list.children('li');
//  
//    $styledSelect.click(function(e) {
//        e.stopPropagation();
//        jQuery('div.select-styled.active').not(this).each(function(){
//            $(this).removeClass('active').next('ul.select-options').hide();
//        });
//        jQuery(this).toggleClass('active').next('ul.select-options').toggle();
//    });
//  
//    $listItems.click(function(e) {
//        e.stopPropagation();
//        $styledSelect.text(jQuery(this).text()).removeClass('active');
//        $this.val(jQuery(this).attr('rel'));
//        $list.hide();
//        //console.log($this.val());
//    });
//  
//    jQuery(document).click(function() {
//        $styledSelect.removeClass('active');
//        $list.hide();
//    });
//
//});
});





//jQuery(function(){
//    var wrapper = jQuery( ".file_upload" ),
//        inp = wrapper.find( "input" ),
//        btn = wrapper.find( "button" ),
//        lbl = wrapper.find( "div.load" );
//
//    btn.focus(function(){
//        wrapper.addClass( "focus" );
//    }).blur(function(){
//        wrapper.removeClass( "focus" );
//    });
//	
//    btn.add( lbl ).click(function(){
//        inp.click();
//    });
//
//    var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;
//
//    inp.change(function(){
//
//        var file_name;
//        if( file_api && inp[ 0 ].files[ 0 ] )
//            file_name = inp[ 0 ].files[ 0 ].name;
//        else
//            file_name = inp.val().replace( "C:\\fakepath\\", '' );
//        if( ! file_name.length )
//            return;
//
//        if( lbl.is( ":visible" ) ){
//            lbl.text( file_name );
//            btn.text( "Выбрать" );
//        }else
//            btn.text( file_name );
//    }).change();
//});
//
//jQuery( window ).resize(function(){
//    jQuery( ".file_upload input" ).triggerHandler( "change" );
//});

if( jQuery('main').hasClass('service-page') ){
	 ymaps.ready(function () {
		var Map = new ymaps.Map('map', {
				center: [55.911172, 37.539274],
				zoom: 17
			}, {
				searchControlProvider: 'yandex#search'
			}),

		Placemark = new ymaps.Placemark(Map.getCenter(), {
				hintContent: 'Дмитровское шоссе, 163',
				iconCaption: 'Дмитровское шоссе, 163'
			}, {
				preset: 'islands#redDotIconWithCaption'
			})

		Map.geoObjects.add(Placemark);
	});

	ymaps.ready(function () {
		var Map = new ymaps.Map('map2', {
			center: [59.818522, 30.363348],
			zoom: 16
		}, {
			searchControlProvider: 'yandex#search'
		}),

		Placemark = new ymaps.Placemark(Map.getCenter(), {
				hintContent: 'Московское шоссе, 29к2',
				iconCaption: 'Московское шоссе, 29к2'
			}, {
				preset: 'islands#redDotIconWithCaption'
			})

		Map.geoObjects.add(Placemark);
	});
}
if( jQuery('main').hasClass('vyzov-page') ){
	ymaps.ready(function () {
		var Map = new ymaps.Map('map3', {
			center: [59.938273, 30.315182],
			zoom: 16
		}, {
			searchControlProvider: 'yandex#search'
		}),

		Placemark = new ymaps.Placemark(Map.getCenter(), {
			}, {
				preset: 'islands#redDotIconWithCaption'
			})

		Map.geoObjects.add(Placemark);
	});
}
