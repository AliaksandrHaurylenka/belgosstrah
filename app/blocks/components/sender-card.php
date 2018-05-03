<div class="block-card">
	<h3 class="mb-3">Данные отправителя</h3>
	<div class="d-flex flex-column card mx-auto px-3">
		<img src="img/resources/visa.svg" class="mt-2 svg image" alt="">
		<!-- <object type="image/svg+xml" data="img/resources/visa.svg" class="mt-2 svg"></object> -->
		
		<div class="form-group">
			<label>Номер карты</label>
			<input type="text" class="form-control border-radius pan exampleInputCard1">
		</div>
		

		<div>
			<div class="form-group float-left date">
				<label>Срок действия</label>				
				<div class="d-flex">						
					<input type="text" class="form-control border-radius exampleInputDate" placeholder="ММ">
					<span class="spacer">/</span>	    						
					<input type="text" class="form-control border-radius year" placeholder="ГГ">
				</div>
			</div>
							
			<div class="form-group mr-4 float-right w-25">
				<label>CW/CVC</label>
				<div class="check-message">
					<i class="fa fa-question-circle-o fa-lg icon icon-card" aria-hidden="true"></i>
					<p class="p-2 question">Последние 3 цифры (или 4 цифры для American Express) на обратной стороне Вашей карты.</p>
				</div>
				<input type="text" class="form-control border-radius w-75 exampleInputCW">
			</div>
		</div>
	</div>
</div>