@extends('layouts.app')

@section('title', 'index')

@section('content')
<table>
    <tr>
        <th>Titolo</th>
        <th>Messaggio</th>
        <th>Creato</th>
        <th>Ultima modifica</th>
        <th>
            <a href="#">
                <i class="Fas fa-plus"></i></th>
            </a>
    </tr>
    @forelse($tickets as $ticket) 
    <tr>
        <td>{{ $ticket->title }}</td>
        <td>{{ $ticket->message }}</td>
        <td>{{ $ticket->created_at }}</td>
        <td>{{ $ticket->updated_at }}</td>
        @empty
        <h1>Non ci sono ticket</h1>
        @endforelse
    </tr>
</table>
@endsection