@extends('layouts.master')
            
    {{$name}}
    <?php if($isweekend) : ?>
        <?= "va t'amuser"; ?>
    <?php else : ?>
        <?= "Mon gar va travailler"; ?>
    <?php endif ?>

        @if($isweekend)
            {{"va t'amuser"}}
        @else
            {{"va travailler"}}
        @endif
