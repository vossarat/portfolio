<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Напишите мне</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form>               	                
                	<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
						<label for="url" class="col-md-4 control-label">Адрес</label>

						<div class="col-md-6">
							<input id="url" type="text" class="form-control" name="url" value="{{ $viewdata->url or old('url') }}">
							@if ($errors->has('url'))
							<span class="help-block">
								<strong>
									{{ $errors->first('url') }}
								</strong>
							</span>
							@endif
						</div>
					</div>
					
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Ваше имя</label>
                            <input type="text" class="form-control" placeholder="Ваше имя" id="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="phone">Номер телефона</label>
                            <input type="tel" class="form-control" placeholder="Номер телефона" id="phone">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="message">Текст сообщения</label>
                            <textarea rows="5" class="form-control" placeholder="Текст сообщения" id="message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" id="btnSendMessage" class="btn btn-success btn-lg">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>