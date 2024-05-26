@extends('layouts.app')

@section('title', 'index')

@section('content')
<table>
    <tr>
        <th>Titolo</th>
        <th>Messaggio</th>
        <th>Categoria</th>
        <th>Assegnato a</th>
        <th>Creato</th>
        <th>Ultima modifica</th>
        <th>
            <a href="{{ route('tickets.create') }}">
                <i class="fas fa-plus"></i></th>
            </a>
    </tr>
    @forelse($tickets as $ticket) 
    <tr>
        <td>{{ $ticket->title }}</td>
        <td>{{ $ticket->message }}</td>
        <td class="text-center">{{ $ticket->category ? $ticket->category : '-' }}</td>
        <td class="text-center">{{ $ticket->worker ? $ticket->category : '-' }}</td>
        <td>{{ $ticket->created_at }}</td>
        <td>{{ $ticket->updated_at }}</td>
        <td>
            <div class="action-btn">
                <a href="{{ route('tickets.show', $ticket->id) }}">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('tickets.edit', $ticket->id)}}">
                    <i class="fas fa-pencil"></i>
                </a>
            </div>
        </td>
        @empty
        <h1>Non ci sono ticket</h1>
        @endforelse
    </tr>
</table>
@endsection