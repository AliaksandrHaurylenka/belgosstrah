<!--НАЧАЛО ФОРМЫ-->
<!-- https://itchief.ru/lessons/php/feedback-form-for-website -->
<!--noindex-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Программа "КАСКО-Оптима"</h4>
      </div>
      <div class="modal-body">

<h4>Оставить заявку</h4>
<div class="col subtype">
  <div class="panel panel-success">
    <div class="panel-body">

      <!-- Форма обратной связи -->
      <form id="feedbackForm" action="/feedback/process/process.php" enctype="multipart/form-data" novalidate>
        <div class="row">
          <div class="col">
            <!-- Имя пользователя -->
            <div class="form-group has-feedback">
              <label class="control-label">Ф.И.О.</label>
              <input type="text" name="name" class="form-control"
                     value="" minlength="2" required="required">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Возраст -->
            <div class="form-group has-feedback">
              <label class="control-label">Марка машины</label>
              <input type="text" name="auto" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>

          <div class="col-sm-6">
            <!-- Пол страхуемого -->
            <div class="form-group has-feedback">
              <label class="control-label">Год выпуска</label>
              <input type="number" name="year" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group has-feedback">
              <label class="control-label">Вид страховки</label>
              <select class="form-control">
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
              <label class="control-label">Сумма страхования (стоимость авто)</label>
              <input type="number" name="sum" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Спортивные интересы -->
            <div class="form-group has-feedback">
              <label class="control-label">Возраст водителя</label>
              <input type="number" name="age" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- Сумма страхования -->
            <div class="form-group has-feedback">
              <label class="control-label">Стаж водителя</label>
              <input type="text" name="age" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <div class="form-group has-feedback">
              <label class="control-label">С выездом за границу?</label>
              <select class="form-control">
                <option>Нет</option>
                <option>Да</option>
              </select>
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Спортивные интересы -->
            <div class="form-group has-feedback">
              <label class="control-label">Телефон</label>
              <input type="text" name="phone" required="required"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- E-mail -->
            <div class="form-group has-feedback">
              <label class="control-label">E-mail</label>
              <input type="email" name="email"
                     class="form-control"
                     value="">
              <span class="glyphicon form-control-feedback"></span>
            </div>
          </div>
        </div>

        <!-- Сообщение пользователя -->
        <div class="form-group has-feedback">
          <label class="control-label">Дополнительные пожелания (не менее 10 символов)</label>
          <textarea name="message" class="form-control"
                    rows="5" minlength="10"
                    maxlength="500">
          </textarea>
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

    </div><!--panel-body-->
  </div><!--panel panel-success-->
</div><!--col subtype-->


      </div><!--modal-body-->
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<!--/noindex-->