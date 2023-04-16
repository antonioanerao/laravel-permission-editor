@extends('permission-editor::layouts.app')

@section('content')

    @if ($errors->any())
        <div class="text-red-500 text-sm mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   create
@endsection
