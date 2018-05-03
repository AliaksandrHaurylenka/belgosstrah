<form method="post">
	<!-- Для экранов >=992px -->
	<div class="d-flex justify-content-around  pt-3 pb-5 hidden-md-down">
		<!-- Данные отправителя, форма отправки -->
		<div>
			<? include ('blocks/components/sender-card.php'); ?>
			<? include ('blocks/components/form.php'); ?>		
		</div>
		
		<!-- Данные получателя, форма сообщения -->
		<div>
			<? include ('blocks/components/the-card-recipient.php'); ?>
			<? include ('blocks/components/message.php'); ?>
		</div>	
	</div>

	<!-- Для экранов <=992px -->
	<div class="row hidden-lg-up">
		<div class="col-12 mt-3">
			<? include ('blocks/components/sender-card.php'); ?>
		</div>
		
		<div class="col-12 mt-3">
			<? include ('blocks/components/the-card-recipient.php'); ?>
		</div>

		<div class="col-12">
			<? include ('blocks/components/form.php'); ?>
		</div>	
	</div>
</form>

<!-- Модальные окна валидации вводимых данных -->
<? include ('blocks/components/modal.php'); ?>