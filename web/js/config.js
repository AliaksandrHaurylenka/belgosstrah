$(function(){

  var pos='top';
  var trig='hover';

  $('.transfer').popover({
    placement: 'bottom',
    trigger: 'focus',
    html: true,
    title: 'Доставка',
    content:
    "<p><strong>Доставка полиса осуществляется в пределах города Гомель.</strong></p>"+
    "<p>Услуга доставки осуществляется страховым агентом по этому при встрече вы можете получить профессиональную консультацию и ответы на интересующие вас вопросы.</p>"+
    "<p><strong>Доставка полисов производится бесплатно при условии размера страхового взноса:</strong></p>"+
    "<ul>"+
    "<li>страхование КАСКО;</li>"+
    "<li>по добровольным видам страхования - от 200 рублей.</li>"+
    "</ul>"+
    "<p><strong>В иных случаях стоимость доставки составляет 4 рубля.</strong></p>"+
    "<p>Обращения рассматриваются:<br> пн.-вс. 8.30 - 17.30</p>"+
    "<p>Доставка осуществляется:<br> пн.-пт. 9.00 -16.00, сб. 10.00-16.00</p>"
  });

  $('.calc').popover({
    placement: 'left',
    trigger: trig,
    title: 'Страховой калькулятор',
    // content: "Рассчитать стоимость страховых услуг."
  });

  $('.feedback').popover({
    placement: 'right',
    trigger: trig,
    title: 'Обратная связь',
    // content: "And here's some amazing content. It's very engaging. Right?"
  });

    //АКТИВНЫЕ ВКЛАДКИ
    var pageHref = window.location.pathname;
    $('.navbar-nav li a, .nav.flex-column a').removeClass('active');
    $('.navbar-nav a, .nav.flex-column a').each(function(){ // для каждой ссылки
        var linkHref = $(this).attr('href');//получаем href
        if (linkHref == pageHref){//сравниваем полученное из адресной строки с href ссылки
            // при совпадении присваиваем класс - какому элементу хотите?????
            $(this).closest('.navbar-nav li a, .nav.flex-column a, .navbar-nav li > a').addClass('active');
        }
    });

    //АКТИВНАЯ ВКЛАДКА "ИСТОРИЯ"
    var b = document.location.pathname;
    // alert(b);
    // var bro = b.substr(1, 3);
    // alert(bro);
    $('.dropdown-menu a').each(function(){
        if ($(this).attr('href') == b){
          $(this).closest('.navbar-nav li > a.nav-link').addClass('active');
        }
    });


    //Скрытие модального окна
    $('#optima').click(function(){
      // alert("Ok")
      $('#modal_kasko-optima').modal('hide');
      $('#modal').modal('show');
    })


    //Скролинг вверх
    $.scrollUp(
        {
            scrollName: 'scrollUp',      // Element ID
            scrollDistance: 300,         // Distance from top/bottom before showing element (px)
            scrollFrom: 'top',           // 'top' or 'bottom'
            scrollSpeed: 300,            // Speed back to top (ms)
            easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
            animation: 'fade',           // Fade, slide, none
            animationSpeed: 200,         // Animation speed (ms)
            scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
            scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
            scrollText: '', // Text for element, can contain HTML
            scrollTitle: false,          // Set a custom <a> title if required.
            scrollImg: false,            // Set true to use image
            activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647           // Z-Index for the overlay
        }
    );
});
