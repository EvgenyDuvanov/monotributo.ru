@extends('layouts.base')

@section('content')
<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form action="{{ route('applications.store') }}" method="POST" class="p-4 border rounded-3 shadow">
                @csrf
                
                <h3>Заявка на услугу</h3>

                <!-- Поле для услуги, недоступное для изменения -->
                <div class="mb-3">
                    <label for="service" class="form-label">Услуга</label>
                    <input type="text" id="service" class="form-control border-0" value="{{ $service->name }}" readonly>
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                </div>

                <!-- Поле для имени -->
                <div class="mb-3">
                    <label for="name" class="form-label">Как вас зовут?</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <!-- Поле для выбора способа связи -->
                <div class="mb-3">
                    <label for="contact_method" class="form-label">Способ связи</label>
                    <select name="contact_method" id="contact_method" class="form-select" required>
                        <option value="">Выберите удобный способ связи</option>
                        <option value="telegram">Telegram</option>
                        <option value="whatsapp">WhatsApp</option>
                        <option value="call">Телефонный звонок</option>
                    </select>
                </div>

                <!-- Поле для ввода контактных данных -->
                <div class="mb-3">
                    <label for="contact_details" class="form-label">Контактные данные</label>
                    <input type="tel" name="contact_details" id="contact_details" class="form-control" placeholder="Введите номер телефона или контактный логин" required>
                </div>

                <!-- Поле для дополнительного сообщения -->
                <div class="mb-3">
                    <label for="comment" class="form-label">Дополнительное сообщение</label>
                    <textarea name="comment" class="form-control" rows="3"></textarea>
                </div>

                <!-- Кнопка отправки -->
                <button type="submit" class="btn btn-primary">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>
@endsection
