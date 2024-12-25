@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Управление заявками</h2>
    <div class="table-responsive">
        <table class="table table-hover text-center align-middle">
            <thead class="thead-light" style="background-color: #f8f9fa;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Email</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applications as $application)
                    <tr>
                        <th scope="row">{{ $loop->iteration + ($applications->currentPage() - 1) * $applications->perPage() }}</th>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->email }}</td>
                        <td>{{ $application->phone }}</td>
                        <td>
                            @php
                                $status = $statuses[$application->status] ?? ['label' => 'Неизвестно', 'class' => 'badge bg-secondary'];
                            @endphp
                            <span class="{{ $status['class'] }}">{{ $status['label'] }}</span>
                        </td>
                        <td>
                            <span class="text-truncate" style="max-width: 200px; display: inline-block;" title="{{ $application->comment }}">
                                {{ Str::limit($application->comment, 30, '...') }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.applications.edit', $application->id) }}" class="btn btn-sm btn-primary" style="background-color: #0dbdfd; border: none;">Редактировать</a>
                            <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" style="border: none;" onclick="return confirm('Вы уверены, что хотите удалить эту заявку?')">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Нет заявок</td>
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
