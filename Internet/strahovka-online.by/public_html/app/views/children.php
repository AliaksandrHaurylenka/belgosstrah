<?php $this->layout('layout',
    [
        'title'=>'Страхование детей',
        'description'=>'Страховая программа «Детское страхование»  - программа страхования для детей, обеспечивающая одновременно защиту ребенка и целевые сбережения (на увлекательные экскурсионные поездки, подготовку к первому классу, репетиторов для поступления в вуз)'
    ])
?>

<div class="container">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    <li class="breadcrumb-item active">Страхование детей</li>
  </ol>

  <section>
    <div class="well mt-3">
      <h1 class="pb-2">ПРОГРАММА «ДЕТСКОЕ СТРАХОВАНИЕ»</h1>
    </div>

    <div class="description">
      <p>Страховая программа «Детское страхование»  - программа страхования для детей, обеспечивающая одновременно защиту ребенка и целевые сбережения (на увлекательные экскурсионные поездки, подготовку к первому классу, репетиторов для поступления в вуз).</p>
    </div>


    <h4>Основные условия:</h4>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>#</th>
        <th>Застрахованный</th>
        <th>От 0 лет до 18 лет</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Страхователь</td>
        <td>родитель или другой родственник</td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Срок страхования</td>
        <td>от 3 до 23 лет</td>
      </tr>

      <tr>
        <th scope="row">3</th>
        <td>Валюта страхования</td>
        <td>белорусские рубли, валютный эквивалент</td>
      </tr>

      <tr>
        <th scope="row">4</th>
        <td>Размер страхового взноса</td>
        <td>Вы выбираете сами</td>
      </tr>

      <tr>
        <th scope="row">5</th>
        <td>Периодичность уплаты страхового взноса</td>
        <td>ежемесячно, ежеквартально, ежегодно, единовременно</td>
      </tr>

      <tr>
        <th scope="row">6</th>
        <td>Основной страховой случай</td>
        <td>достижение возраста</td>
      </tr>

      <tr>
        <th scope="row">6</th>
        <td>Дополнительные страховые случаи</td>
        <td>установление инвалидности, причинение вреда здоровью</td>
      </tr>
      </tbody>
    </table>

    <h4>Описание программы:</h4>
    <p>За время действия договора родитель (другой родственник) периодически уплачивает страховые взносы, которые накапливаются на личном счету. Дополнительно на них начисляются проценты.</p>
    <p>Одновременно ребенок получает страховую защиту на весь период накопления: в случае установления инвалидности или причинения вреда здоровью ребенка в течение срока действия договора производится выплата страхового обеспечения по дополнительным страховым случаям. </p>

    <div class="">
      <button class="button" data-toggle="modal" data-target="#modal_stravita">Застраховаться</button>
    </div>

<!--    --><?php //$this->insert('blocks/form-stravita'); ?>

  </section>


</div>
