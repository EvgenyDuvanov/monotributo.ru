{{-- <div class="border-bottom pt-4">
    <header>
        <div class="container d-flex flex-column flex-md-row align-items-center pb-3">
            <a href="/admin" class="d-flex align-items-center link-body-emphasis text-decoration-none">  
                <span class="fs-4">MONOTRIBUTO.RU</span>
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.dashboard') }}">Дашборд</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.guides') }}">Гайды</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.services') }}">Услуги</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.combos') }}">Пакеты</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.contacts') }}">Контакты</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.reviews') }}">Отзывы</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.applications') }}">Заявки</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.faqs') }}">FAQs</a>
                <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link link-body-emphasis text-decoration-none">Выйти</button>
                </form>
            </nav>
        </div>
    </header>
</div> --}}


<div class="border-bottom pt-4">
    <header>
        <div class="container d-flex justify-content-between align-items-center pb-3">
            <!-- Логотип -->
            <a href="/admin" class="d-flex align-items-center link-body-emphasis text-decoration-none">  
                <span class="fs-4">MONOTRIBUTO.RU</span>
            </a>

            <!-- Кнопка-гамбургер -->
            <button 
                class="navbar-toggler d-md-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarMenu" 
                aria-controls="navbarMenu" 
                aria-expanded="false" 
                aria-label="Переключение навигации" 
                style="background: none; border: none; font-size: 1.5rem; cursor: pointer;">
                <span>&#9776;</span> <!-- Символ гамбургера -->
            </button>

            <!-- Навигация -->
            <nav class="d-none d-md-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.dashboard') }}">Дашборд</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.guides') }}">Гайды</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.services') }}">Услуги</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.combos') }}">Пакеты</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.contacts') }}">Контакты</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.reviews') }}">Отзывы</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.applications') }}">Заявки</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.faqs') }}">FAQs</a>
                <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link link-body-emphasis text-decoration-none">Выйти</button>
                </form>
            </nav>
        </div>

        <!-- Выпадающее меню для мобильных -->
        <div class="collapse d-md-none" id="navbarMenu">
            <nav class="d-flex flex-column mt-3">
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.dashboard') }}">Дашборд</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.guides') }}">Гайды</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.services') }}">Услуги</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.combos') }}">Пакеты</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.contacts') }}">Контакты</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.reviews') }}">Отзывы</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.applications') }}">Заявки</a>
                <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('admin.faqs') }}">FAQs</a>
                <form method="POST" action="{{ route('admin.logout') }}" class="mt-2">
                    @csrf
                    <button type="submit" class="btn btn-link link-body-emphasis text-decoration-none">Выйти</button>
                </form>
            </nav>
        </div>
    </header>
</div>
