$(document).ready(function(){
	// if($('.js_phone-mask').length > 0) {
	// 	$('.js_phone-mask').inputmask({alias: 'phoneru'});
	// }
	$('.js_modalWindow').fancybox({
		afterClose : function () {
			$('.modal-block').removeClass('modal-noactive');
			$('.modal-thanks').removeClass('modal-active');
		}
	});
	// $(document).on('click', '.js_modalThanks', function () {
	// 	$('.modal-block').addClass('modal-noactive');
	// 	$('.modal-thanks').addClass('modal-active');
	// });// уже добавлял тоже самое - смотри
	$('#fw-ext-builder-frontend-grid-css').remove();
});



$(document).on('click', '#send__form', function (e) {
	e.preventDefault();
	var id = '#' + $(this).attr('data-form') + '';
	// var data = $('#'+id+'').serialize();
	var $data = {};
	$(id).find ('input').each(function() {
		$data[this.name] = $(this).val();
	});
	// var name = $("input[name='name']").val();
	// var phone = $("input[name='phone']").val();
	var name = $data.name;
	var phone = $data.phone;

	var form_data = new FormData();
	if (name ==='') {
		alert('Введите Ваше имя!');
		return false;
	}
	if(phone === '') {
		alert('Введите номер телефона!');
		return false;
	}
	if(name !== '') {
		form_data.append('action', 'sendForm');
		form_data.append('name', name);
		form_data.append('phone', phone);
		$.ajax({
			url: myajax.url,
			type: 'post',
			data: form_data,
			contentType: false,
			processData: false,
			success: function (response) {
				if (response.result === 'success') {
					/*form.reset();*/
					console.log(123); // покажи где подключаются скрипты
					$(id).trigger('reset');
					  $('.modal-block').addClass('modal-noactive');
					  $('.modal-thanks').addClass('modal-active');
					  $('.modal-phone').addClass('modal-noactive');
					// alert(response.message);
				} else {
					alert(response.message);
				}
			}
		});
		return false;
	} else {
		alert('Вы не заполнили все поля!');
	}
});