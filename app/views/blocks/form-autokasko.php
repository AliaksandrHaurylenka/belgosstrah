<!--НАЧАЛО ФОРМЫ-->
<!-- https://itchief.ru/lessons/php/feedback-form-for-website -->
<!--noindex-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Оставить заявку</h4>
      </div>
      <div class="modal-body">

<div class="col">
  <div class="panel panel-success">
    <div class="panel-body">

      <!-- Форма обратной связи -->
      <form id="feedbackForm" action="/feedback/process/autokasko.php" enctype="multipart/form-data" novalidate>
        <div class="row">
          <div class="col">
            <!-- Имя пользователя -->
            <div class="form-group has-feedback">
              <label for="name" class="control-label">Ф.И.О.</label>
              <input id="name" type="text" name="name" class="form-control"
                     value="" minlength="2" required="required">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Возраст -->
            <div class="form-group has-feedback">
              <label for="auto" class="control-label">Марка машины</label>
              <input id="auto" type="text" name="auto" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>

          <div class="col-sm-6">
            <!-- Пол страхуемого -->
            <div class="form-group has-feedback">
              <label for="year" class="control-label">Год выпуска</label>
              <input id="year" type="text" name="year" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Возраст водителя -->
            <div class="form-group has-feedback">
              <label for="age" class="control-label">Возраст водителя</label>
              <input id="age" type="text" name="age" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- Сумма страхования -->
            <div class="form-group has-feedback">
              <label for="driving_experience" class="control-label">Стаж вождения</label>
              <input id="driving_experience" type="text" name="driving_experience" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group has-feedback">
              <label for="type" class="control-label">Вид страховки</label>
              <select id="type" class="form-control" name="type">
                <option>КАСКО-Оптима</option>
                <option>Личная защита</option>
                <option>КАСКО-Автопрофи</option>
              </select>
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- Работа -->
            <div class="form-group has-feedback">
              <label for="sum" class="control-label">Сумма страхования (стоимость авто)</label>
              <input id="sum" type="text" name="sum" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <div class="form-group has-feedback">
              <label for="abroad" class="control-label">С выездом за границу?</label>
              <select id="abroad" class="form-control" name="abroad">
                <option>Нет</option>
                <option>Да</option>
              </select>
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Мобильный телефон -->
            <div class="form-group has-feedback">
              <label for="phone" class="control-label">Моб. телефон</label>
              <input id="phone" type="tel" name="phone" required="required"
                     class="form-control"
                     placeholder="+375 (29) 123-45-67"
                     pattern="\+375\s?[\(]{0,1}[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- E-mail -->
            <div class="form-group has-feedback">
              <label for="email" class="control-label">E-mail</label>
              <input id="email" type="email" name="email"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <!-- Сообщение пользователя -->
        <div class="form-group has-feedback">
          <label for="message" class="control-label">Дополнительные пожелания (не менее 10 символов)</label>
          <textarea id="message" name="message" class="form-control"
                    rows="5" minlength="10"
                    maxlength="500"></textarea>
        </div>

        <!-- Капча -->
        <div class="captcha">
          <div class="refresh-captcha">
            <img class="img-captcha img-responsive" src="/feedback/captcha/captcha.php"
                 data-src="/feedback/captcha/captcha.php" alt="">
            <span>* Нажмите на картинку, чтобы обновить.</span>
          </div>
          <div class="form-group has-feedback">
            <label for="captcha" class="control-label">Код с картинки</label>
            <input type="text" name="captcha" maxlength="6" required="required" id="captcha"
                   class="form-control captcha" placeholder="*******" autocomplete="off" value="">
            <span class="glyphicon form-control-feedback"></span>
          </div>
        </div>

        <!-- Кнопка для отправки формы -->
        <button type="submit" class="btn btn-primary pull-right">Отправить
          сообщение
        </button>


        <!-- Индикация загрузки данных формы на сервер -->
        <div class="clearfix"></div>
        <div class="progress" style="display:none; margin-top: 20px;">
          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
               aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
            <span class="sr-only">0%</span>
          </div>
        </div>
        <div class="clearfix"></div>

      </form>
      <!--КОНЕЦ ФОРМЫ-->

      <!-- Сообщение об успешной отправки формы -->
      <div class="mt-3 alert alert-warning success-message d-none">
        Сообщение успешно отправлено.
      </div>

    </div><!--panel-body-->
  </div><!--panel panel-success-->
</div><!--col subtype-->


      </div><!--modal-body-->
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<!--/noindex-->