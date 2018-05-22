$(function () {

    var pos = 'top';
    var trig = 'hover';

    $('.transfer').popover({
        placement: pos,
        trigger: trig,
        title: 'Виды доставки',
        content: "And here's some amazing content. It's very engaging. Right?"
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
