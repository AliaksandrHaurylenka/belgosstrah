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
  // alert('Hy');
  // $('#myModal').modal();
});
