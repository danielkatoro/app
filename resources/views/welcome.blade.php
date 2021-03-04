@extends('layouts.master', ['title' => 'Home'])
@inject('app\utilities\date')

@section('content')
    {{$name}}
    <?php if($isweekend) : ?>
        <?= "va t'amuser"; ?>
    <?php else : ?>
        <?= "Mon gar va travailler"; ?>
    <?php endif ?>
        @if($date->isweekend())
        <!-- @if($isweekend)
            {{"va t'amuser"}}
        @else
            {{"va travailler"}}
        @endif -->
@endsection