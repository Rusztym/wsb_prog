@extends('layout')

@section('tytul')
    WSB - O nas
@endsection

@section('podtytul')
    O nas
@endsection

@section('tresc')
    Treść dla strony O nas
    <ol class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        @foreach($zadania as $zadanie)
            <li>{{ $zadanie }}</li>
        @endforeach
    </ol>
@endsection
