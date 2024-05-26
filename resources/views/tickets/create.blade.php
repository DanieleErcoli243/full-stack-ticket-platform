@extends(layouts.app)

@section('title', 'Creazione ticket')

@section('content')
<form action="{{ route(tickets.store) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Scegli un titolo</label>
    <input type="text" id="title" placeholder="Titolo..." name="title">
    <label for="workers">Assegna a un operatore</label>
    <select name="workers" id="workers">
        @forelse($workers as $worker)
        <option value="">{{ $worker }}</option>
        @empty
        <option value="">--</option>
        @endforelse
    </select>
    <label for="message">Srivi il tuo messaggio</label>
    <textarea name="message" id="message"></textarea>
    <button type="submit">Invia</button>
</form>
@endsection