<?php
declare(strict_types=1);

namespace p2e\mineshaft\mines;


abstract class MineListener{

    /** @var Mine */
    protected $mine;

    public function __construct(Mine $mine){
        $this->mine = $mine;
    }



}