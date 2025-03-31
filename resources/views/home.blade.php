@extends('layouts.app')

@section('title', 'Laravel')

@push('css')
    <style>
        body {
            background-color: #dbd5d5;
            color: #374151;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página de inicio</h1>

        <!-- En resources/components está este componente, como alert.blade.php -->
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Título de la alerta

            </x-slot>
            Contenido de la alerta
            </x-alert>
            <p>Hola mundo</p>
    </div>
@endsection

{{-- <x-app-layout> --}}



{{-- </x-app-layout> --}}
