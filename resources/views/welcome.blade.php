
@extends('layouts.master', ['title' => 'Home'])

@section('content')
    {{$name}}
    <?php if($isweekend) : ?>
        <?= "va t'amuser"; ?>
    <?php else : ?>
        <?= "Mon gar va travailler"; ?>
    <?php endif ?>

        @include('partials._weekend')
@endsection