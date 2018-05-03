$(function(){
	/**
	 * Функция вывода бренда карты
	 * @param  {[type] - строка в виде числа} ); var value [принимает число из input]
	 * @return {[type] - строка: путь расопложения файла}   [изменяется атрибут data у тега object]
	 */
    $('.exampleInputCard1, .exampleInputCard2').on('input propertychange', function () 
    {
    	/**
    	 * Получаем первое число из input номера карты
    	 * и в соответствии с полученным числом
    	 * возвращаем путь к файлу изображения
    	 */
	    try 
	    {
	        var value = $(this).val();

	        switch(value.charAt(0))
		    {
		    	case '4': throw 'img/resources/visa.svg'; break;
		    	case '5': throw 'img/resources/mastercard.svg'; break;
		    	case '6': throw 'img/resources/maestro.svg'; break;
		    	default: throw 'img/resources/visa.svg';
		    }

	    }
	    /**
	     * Принимаем число из input номера карты
	     * и в зависимости от числа добавляем элемент на страницу
	     * присваивая ему класс видимости.
	     * Если число не совпадает, то изображению по умолчанию
	     * присваивается класс скрытости элемента,
	     * но учавствующего в общем потоке страницы
	     */
	    catch (e) 
	    {
	        if (value.charAt(0) == '4' || 
	        	value.charAt(0) == '5' || 
	        	value.charAt(0) == '6')
	        {
	        	$(this).closest('.form-group').prev('.image').attr('src', e).css("visibility", "visible");
	        	// $(this).closest('.form-group').prev('object').attr('data', e).css("visibility", "visible");
	        }
	        else 
	        {
	        	$(this).closest('.form-group').prev('.image').attr('src', e).css("visibility", "hidden");
	        	// $(this).closest('.form-group').prev('object').attr('data', e).css("visibility", "hidden");
	        }
	    }
	    return false;
	});
	
	

	/**
	* Настройка для смены цвета кнопки
	* функция changeColor()
	* var btnColorDefault - цвет по умолчанию
	* параметр btnColor - задается цвет кнопки
	* если цвет задан, то он прорисовывается,
	* если нет, то берем дефолтный цвет
	*/
	function changeColor(btnColor){
		var btnColorDefault = '#49924D';

		if (btnColor){
			$('.change-color').css({'background-color': btnColor});
		} else {
			$('.change-color').css({'background-color': btnColorDefault});
		}
	}

	//changeColor();
	changeColor('blue');
	//==========================================


	/**
	* Настройка смены валюты
	* функция changeCurrency()
	* параметр currency - задает валюту
	* если валюта задана, то она высвечивается,
	* если нет, то дефолтно выводится BYN
	*/
	function changeCurrency(currency){		
		if (currency){
			$('.currency').append("<div class='input-group-addon border-radius'>" + currency + "</div>");
		} else {
			$('.currency').append("<div class='input-group-addon border-radius'>BYN</div>");
		}
	}

	// changeCurrency();
	changeCurrency('RUB');
	//==========================================


	
	//Появление поля для ввода сообщения при нажатии чекбокса
	$('.click-checkbox').click(function(){
	    if ($(this).is(':checked')){
	        $('.message').show(100);
	        $('.click-checkbox').prop('checked', true);// checkbox нажат
	    } else {
	        $('.message').hide(100);
	        $('.click-checkbox').prop('checked', false);// checkbox скрыт
	    }
	});
	

	//Появляется ответ при наведении мышки на вопрос
	$('.icon').hover(
		function(){
		  $(this).next('.check-message .question').show(100);
		},
		function(){
		  $(this).next('.check-message .question').hide(500);
	});


	// добавление всем input обязательное заполнение
	$('input').attr('required', 'required');

	// удалить обязательную галочку в checkbox
	$('input[type="checkbox"]').removeAttr('required');


	/**
	* Плагин jquery.mask.min.js
	* для ввода данных по правилу
	* вводим в поля карты цифры
	*/
	var number1 = $('.exampleInputCard1')
		number1.mask('9999-9999-9999-9999');
	var number2 = $('.exampleInputCard2')
		number2.mask('9999-9999-9999-9999');	
	var MM = $('.exampleInputDate');
		MM.mask('99');
	var YY = $('.year');
		YY.mask('99');
	var CW = $('.exampleInputCW');
		CW.mask('9999');
	$('.exampleSum1, .exampleSum2').mask('999999');

	
	/**
	 * Фокусирование курсора при окончании
	 * ввода установленного количества символов
	 */
	$(number1).on('keyup', function(){
		if (number1.val().length == 19)
			$('.exampleInputDate').focus();
	});
	$(MM).on('keyup', function(){
		if (MM.val().length == 2)
			$('.year').focus();
	});
	$(YY).on('keyup', function(){
		if (YY.val().length == 2)
			$('.exampleInputCW').focus();
	});
	


// ==================== ВАЛИДАЦИЯ ФОРМ ВВОДА ДАННЫХ =========================
	// Переменные для модального окна вывода ошибок 
	var dash = '<p>Пока номер карты состоит только из цифр!</p>';
	var month = '<p>В году, к сожалению, 12 месяцев! :):):)</p>';
	var summax_1 = '<p>Сумма должна быть не более 500000 руб.</p>';
	var summax_2 = '<p>Сумма должна быть не более 530150 руб.</p>';
	var email = '<p>У Вас на самом деле такой длинный E-mail</p>';

	/**
	 * Модальное окно ошибок
	 * @param  {string}
	 * @param  {string}
	 * @return {modal show}
	 */
	function modalView(text, id){
		$('.modal-body').append(text);
			$('#modal-error').modal('show');
			$(id).val('');
			$('.form-check-input').focus();// для того, чтобы пользователь, при появлении модального окна,
									// при повторном нажатиии на клавиатуру не мог ничего ввести в input,
									// т.к. при повторном неправильном вводе появляется вторая строка в окне,
									// что приводит к необходимости перезагрузки страницы
	}

	/**
	* При вводе букв в поле номера карточки
	* появляются три тире ---,
	* предупреждаем пользователя, что нужно вводить цифры
	*/
	$('.exampleInputCard1, .exampleInputCard2').on('keyup', function(){
		var str = '---';
		if($(this).val() == str){
			modalView(dash, '.exampleInputCard1, .exampleInputCard2');
		}
	});


		
	//========== Поле месяц ===================
	/**
	* В поле ММ вводится диапазон цифр от 1 до 12
	* TODO не работает на мобильниках
	*/
	$('.exampleInputDate').on('keyup', function() {	    
	    if($(this).val() > 12) {
	  		modalView(month, '.exampleInputDate');
	    } else if ($(this).val() == 0) {
	    	$(this).css('border', '1px solid red');
	    }
	    else {
	    	$(this).css({
	    		'border': '0',
	    		'border-bottom': '1px solid #000'
	    	});
	    }
	});
	

	/**
	* Если введена одна цифра в input ММ,
	* то автоматически добавляется 0
	* TODO не работает на мобильниках
	*/
	$('.exampleInputDate').on('change', function(){
		minLen = 1;
	    if($(this).val().length == minLen){
	      $(this).val('0' + $(this).val());
	    }
	});
	// ========= Конец Поле месяц ==============



	/**
	* Ограничение количества символов в email 
	*/
	$('input[type="email"]').on('keyup', function() {	
	    if ($(this).val().length > 30) {
	    	modalView(email, 'input[type="email"]');
	    }
	});



	var sum_max1 = 500000;
	var sum_max2 = 530150;
	var sum_min1 = 500;
	var sum_min2 = 680;

	/**
	 * Изменение цвета рамки при малой сумме
	 * Появление модального окна при превышении сумы
	 * @param  {integer}
	 * @param  {integer}
	 * @param  {integer}
	 * @param  {integer}
	 * @return {string, modal, css}
	 */
	function transfer(max, min, id, text){
		if ($(id).val() > max) {
			modalView(text, id);
	    } else if ($(id).val() < min){
	    	$(id).css('border', '1px solid red');
	    } else {
	    	$(id).css({
	    		'border': '1px solid rgba(0, 0, 0, 0.15)',
	    		'border-right': '0'
	    	});
	    }
	}
	


	/**
	* В поле Сумма перевода диапазон чисел от 500 до 500000
	* TODO не работает на мобильниках
	*/
	$('.exampleSum1').on('keyup', function() {	
	    transfer(sum_max1, sum_min1, '.exampleSum1', summax_1);
	});



	/**
	* В поле Итоговая сумма диапазон чисел от 680 до 530150
	* TODO не работает на мобильниках
	*/
	$('.exampleSum2').on('keyup', function() {
		transfer(sum_max2, sum_min2, '.exampleSum2', summax_2);	    	    
	});



	/**
	* Очистка модального окна после закрытия
	*/	
	$('#modal-error').on('hidden.bs.modal', function (e) {
	  $('.modal-body p').remove();
	})
	
// ===================КОНЕЦ ВАЛИДАЦИЯ ФОРМ ВВОДА ДАННЫХ ==============================
});
