<div class="text-center p-3" style="background-color: #656565; color: white; border-radius: 25px" >
    <h4>Заявка</h4>
    <form action="{{ route('applications.store') }}" method="POST" style="border-radius: 15px; background-color: #656565; padding: 20px;">
        @csrf
        <div class="input-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Как вас зовут?" required>
        </div>
        <div class="input-group mt-2">
            <input type="text" id="email" name="email" class="form-control" placeholder="Электронная почта" required>
        </div>
        <div class="input-group mt-2">
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Номер телефона" required>
        </div>
        <button type="submit" class="btn mt-3" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 0.25rem; border: none; padding: 0.5rem 1rem; text-align: center;">Отправить заявку</button>
    </form>
</div>
