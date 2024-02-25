<div class="container-fluid py-4 pt-5" id="rsvp" data-aos="fade" data-aos-duration="500" data-aos-delay="500">
    <div class="container py-4">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Подтверждение участия</h6>
            <h1 class="font-secondary display-4">
                {{ $isFormFilled ? 'Спасибо мы получили Ваш ответ' : 'Присоединяйтесь к тусовке века' }}</h1>
            <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">

                    @if (!$isFormFilled)
                        <form id="rsvpForm" action="/rsvp" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3"
                                        placeholder="Ваше имя" name="name" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;"
                                        name="guests" required>
                                        <option value="">Количество гостей</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;"
                                        name="event" required>
                                        <option value="false">Я не буду присутствовать</option>
                                        <option value="all">Все мероприятия</option>
                                        <option value="ceremony">Начиная с ЗАГСа</option>
                                        <option value="church">Начиная с церкви</option>
                                        <option value="party">Свадебная вечеринка</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="5" placeholder="Сообщение" name="feedback"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5"
                                    type="submit">Отправить</button>
                            </div>
                        </form>
                    @endif
                    <div id="successMessage" style="display: none;">
                        <p>Спасибо! Форма успешно отправлена!</p>
                        <img src="{{ asset('img/checkmark.png') }}" alt="Success">
                    </div>

                    <div id="errorMessage" style="display: none;">
                        <p>Произошла ошибка при отправке формы. Пожалуйста, попробуйте еще раз.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
