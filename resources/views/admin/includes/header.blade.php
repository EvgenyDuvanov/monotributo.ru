<div class="border-bottom pt-4">
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
</div>
