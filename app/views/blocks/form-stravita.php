<!-- Модальное окно "ОБРАТНАЯ СВЯЗЬ" -->
<!--noindex-->
<div class="modal fade" id="modal_feedback" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Оставить заявку</h4>
      </div>
      <div class="modal-body">

        <!--НАЧАЛО ФОРМЫ-->
        <!-- https://itchief.ru/lessons/php/feedback-form-for-website -->
        <div class="col">
          <div class="panel panel-success">
            <div class="panel-body">

              <!-- Форма обратной связи -->
              <form id="feedbackForm" action="/feedback/process/process.php" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Имя пользователя -->
                    <div class="form-group has-feedback">
                      <label for="name" class="control-label">Ф.И.О.</label>
                      <input id="name" type="text" name="name" class="form-control"
                             value="" minlength="2" required="required">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- Возраст -->
                    <div class="form-group has-feedback">
                      <label for="age" class="control-label">Возраст</label>
                      <input id="age" type="number" name="age" required="required"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Пол страхуемого -->
                    <div class="form-group has-feedback">
                      <label for="sex" class="control-label">Пол</label>
                      <select class="form-control" id="sex">
                        <option>Женский</option>
                        <option>Мужской</option>
                      </select>
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- Работа -->
                    <div class="form-group has-feedback">
                      <label for="work" class="control-label">Кем и где работаете</label>
                      <input id="work" type="text" name="work" required="required"
                             class="form-control"
                             minlength="2"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <!-- Спортивные интересы -->
                    <div class="form-group has-feedback">
                      <label for="sport" class="control-label">Занимаетелись спортом? Если да, то каким?</label>
                      <input id="sport" type="text" name="sport" required="required"
                             class="form-control"
                             minlength="4"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group has-feedback">
                      <label for="type" class="control-label">Вид страхования</label>
                      <select class="form-control" id="type">
                        <option>Страхование детей</option>
                        <option>Страхование жизни</option>
                        <option>Защищенный кредит</option>
                        <option>Пенсия</option>
                        <option>Пенсия+</option>
                      </select>
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- Сумма страхования -->
                    <div class="form-group has-feedback">
                      <label for="sum" class="control-label">Сумма страхования</label>
                      <input id="sum" type="number" name="sum" required="required"
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
                      <label for="phone" class="control-label">Телефон</label>
                      <input id="phone" type="text" name="phone" required="required"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
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

              <!-- Сообщение об успешной отправки формы -->
              <div class="alert alert-warning success-message d-none">
                Ваше сообщение успешно отправлено. Нажмите на <a class="show-form" href="#">ссылку</a>, чтобы отправить
                ещё одно сообщение.
              </div>

            </div>
          </div>
        </div>
        <!--КОНЕЦ ФОРМЫ-->


      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<!--/noindex-->