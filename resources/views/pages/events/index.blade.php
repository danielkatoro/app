@extends('layouts.master',['title'=>'Events'])

        <h2>Events</h2>
        <?php 
            dump($events);
        ?>
        <ul>
            <?php foreach($events as $event): ?>
                <li>
                    <?= $event; ?>
                </li>
            <?php endforeach ?>
        </ul>

    </body>
</html>
