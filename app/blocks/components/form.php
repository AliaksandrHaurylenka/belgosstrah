<div class="form-check mt-3">
	<label class="form-check-label">
		<input class="form-check-input" type="checkbox" value="option1" checked>
		<span>Отправить чек на e-mail</span>
	</label>
</div>


<div class="form-group">
  <input type="email" class="form-control border-radius" placeholder="Ваш email">
</div>  

<label>Сумма перевода</label>
<div class="input-group mb-3 currency">
  <input type="text" class="form-control border-radius border-right exampleSum1" placeholder="От 500 до 500000">
</div>

<label>Итоговая сумма</label>
<div class="input-group mb-3 currency">
  <input type="text" class="form-control border-radius border-right exampleSum2" placeholder="От 680 до 530150">
</div>

<!-- Добавить сообщение для формата <992px -->
<div class="hidden-lg-up">
  <? include ('blocks/components/message.php'); ?>
</div>

<button type="submit" class="btn w-100 border-radius change-color">Перевести</button>