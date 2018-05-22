$(function(){

  var pos='top';
  var trig='hover';

  $('.transfer').popover({
    placement: 'bottom',
    trigger: trig,
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
    "<p>Обращения рассматриваются: пн.-вс. 8.30 - 17.30</p>"+
    "<p>Доставка осуществляется: пн.-пт. 9.00 -16.00, сб. 10.00-16.00</p>",
    /*template:
    '<div class="popover" role="tooltip">' +
      '<div class="popover-arrow">' +
      '</div>' +
      '<h3 class="popover-title">dfghdfh</h3>' +
      '<div class="popover-content">' +
      '</div>' +
    '</div>'*/
  });

  $('.calc').popover({
    placement: pos,
    trigger: trig,
    title: 'Online калькулятор',
    content: "And here's some amazing content. It's very engaging. Right?"
  });

  $('[data-target="#modal_feedback"]').popover({
    placement: pos,
    trigger: trig,
    title: 'Обратная связь',
    content: "And here's some amazing content. It's very engaging. Right?"
  });
  // alert('Hy');
  // $('#myModal').modal();
});
