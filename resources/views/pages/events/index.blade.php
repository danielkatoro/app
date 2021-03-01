@extends('layouts.master',['title'=>'Events'])

@section('content')
        <h2>Events</h2>
        <ul>
            <?php foreach($events as $event): ?>
                <li>
                    <?= $event; ?>
                </li>
            <?php endforeach ?>
        </ul>

    </body>
</html>
@endsection('content')