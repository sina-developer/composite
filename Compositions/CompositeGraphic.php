<?php

namespace Compositions;

use Entities\Graphic;

class CompositeGraphic implements Graphic{

    private $graphics = [];

    public function add(Graphic $graphic){
        $this->graphics [] = $graphic;
    }

    public function print(){
        foreach ($this->graphics as $key => $graphic) {
            $graphic->print();
        }
    }
} 