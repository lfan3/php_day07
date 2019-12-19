<?php
abstract class Fighter{
    protected $fighter_type;

    public function __construct($type) {
        $this->fighter_type = $type;
    }

    abstract public function fight($target);
}
?>