<?php

namespace Astatroth\LaravelTimer;

class LaravelTimer
{

    /**
     * @var float
     */
    protected $start = 0;

    /**
     * @var float
     */
    protected $actual = 0;

    /**
    protected $history;

    /**
     * Sets the timer
     */
    public function timerStart()
    {
        $this->start = microtime(true);
    }

    /**
     * Dumps the timer current time without stopping it.
     *
     * @return float
     */
    public function timerRead( )
    {
        $diff = $this->setActualAndGetDiff();
        dump( $diff );
    }

    public function timerStop()
    {
        $diff = $this->setActualAndGetDiff();
        dd( $diff );
    }

    protected function setActualAndGetDiff(){
        $this->actual = microtime(true );
        return $this->actual - $this->start;
    }

}
