@extends('layouts.app')
@section('content')
    <div class="flex justify-center mx-auto p-4 max-w-4xl rounded shadow mb-4">
        <!-- @livewire('items') -->
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:items />
            </div>
        </div>
    </div>
    </div>
@endsection