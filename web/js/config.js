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
    placement: pos,
    trigger: trig,
    title: 'Online калькулятор',
    content: "And here's some amazing content. It's very engaging. Right?"
  });

  $('.feedback').popover({
    placement: pos,
    trigger: trig,
    title: 'Обратная связь',
    content: "And here's some amazing content. It's very engaging. Right?"
  });

    //АКТИВНЫЕ ВКЛАДКИ
    var pageHref = window.location.pathname;
    $('.navbar-nav li a, .nav.flex-column a').removeClass('active');
    $('.navbar-nav a, .nav.flex-column a').each(function(){ // для каждой ссылки
        var linkHref = $(this).attr('href');//получаем href
        if (linkHref == pageHref){//сравниваем полученное из адресной строки с href ссылки
            // при совпадении присваиваем класс - какому элементу хотите?????
            $(this).closest('.navbar-nav li a, .nav.flex-column a').addClass('active');
        }
    });

    //АКТИВНАЯ ВКЛАДКА "ИСТОРИЯ"
    var pagePathname = window.location.pathname;
    $('.navbar-nav li .nav-link').removeClass('active');
    $('.navbar-nav .nav-link').each(function(){
        // var belrosstrah = '/belrosstrah=avtokasko';
        var reg = /[a-z]/i;
        var belrosstrah = '/belrosstrah' +  window.location.search;
        // alert(belrosstrah);


        if ((pagePathname ==  belrosstrah)){
            $('.navbar-nav li a[href="/belrosstrah"]').addClass('active');
        }
    });
});
