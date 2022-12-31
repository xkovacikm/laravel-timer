<?php

use Astatroth\LaravelTimer\Timer;

//
if( !function_exists( "tstart" ) ) {

    function tstart($name = "default")
    {
        return Timer::timerStart($name);
    }

}

//
if( !function_exists( "tread" ) ) {

    function tread( $name = "default" ){
        return Timer::timerRead( $name );
    }

}

//
if( !function_exists( "tstop" ) ) {

    function tstop( $name = "default" ){
        return Timer::timerStop( $name );
    }

}
