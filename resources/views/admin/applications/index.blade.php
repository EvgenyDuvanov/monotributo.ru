@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Управление заявками</h2>
    <div class="table-responsive">
        <table class="table table-hover text-center align-middle">
            <thead class="thead-light" style="background-color: #f8f9fa;">
                <tr>
                    <!-- Веб-версия: отображаем все столбцы, мобильная версия: скрываем -->
                    <th scope="col" class="d-none d-md-table-cell">#</th> <!-- Скрывается на мобильных -->
                    <th scope="col">Имя</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th> <!-- Скрывается на мобильных -->
                    <th scope="col" class="d-none d-md-table-cell">Телефон</th> <!-- Скрывается на мобильных -->
                    <th scope="col">Статус</th> <!-- Статус теперь виден на мобильных версиях -->
                    <th scope="col" class="d-none d-md-table-cell">Комментарий</th> <!-- Скрывается на мобильных -->
                    <th scope="col">Дата заявки</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applications as $application)
                    <tr>
                        <!-- Веб-версия: отображаем все столбцы, мобильная версия: скрываем -->
                        <th scope="row" class="d-none d-md-table-cell">{{ $loop->iteration + ($applications->currentPage() - 1) * $applications->perPage() }}</th> <!-- Скрывается на мобильных -->
                        <td>{{ $application->name }}</td>
                        <td class="d-none d-md-table-cell">{{ $application->email }}</td> <!-- Скрывается на мобильных -->
                        <td class="d-none d-md-table-cell">{{ $application->phone }}</td> <!-- Скрывается на мобильных -->
                        <td>
                            @php
                                $status = $statuses[$application->status] ?? ['label' => 'Неизвестно', 'class' => 'badge bg-secondary'];
                            @endphp
                            <span class="d-md-none {{ $status['class'] }}">{{ $status['label'] }}</span> <!-- Статус будет виден и на мобильных -->
                            <span class="d-none d-md-inline-block {{ $status['class'] }}">{{ $status['label'] }}</span>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="text-truncate" style="max-width: 200px; display: inline-block;" title="{{ $application->comment }}">
                                {{ Str::limit($application->comment, 30, '...') }}
                            </span>
                        </td> <!-- Скрывается на мобильных -->
                        <td>{{ $application->created_at->format('d.m.Y') }}</td> <!-- Дата заявки -->
                        <td>
                            <a href="{{ route('admin.applications.edit', $application->id) }}" class="btn btn-sm btn-primary" style="background-color: #0dbdfd; border: none;">Редактировать</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">Нет заявок</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $applications->onEachSide(1)->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
