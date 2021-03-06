@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Plan Nutricional</li>
        </ol>
    </nav>

    <plan-nutricional></plan-nutricional>
</div>
@endsection


