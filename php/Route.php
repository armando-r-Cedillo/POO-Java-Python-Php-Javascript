<?php

class Route{
public int $id;
public float $start;
public float $end;
    function __construct($id) {
        $this->id = $id;
    }
}