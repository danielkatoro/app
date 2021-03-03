<?php 

    namespace app\utilities;

    class Date
    {
        public function isweekend()
        {
            return date('N') >=6; {{-- define route function --}}
        }
    }

?>