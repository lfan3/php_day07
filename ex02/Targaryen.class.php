<?php

class Targaryen {

    protected $description;
    public function resistsFire(){
        return FALSE;
    }
    public function getBurned(){
        if(static::resistsFire()){
            $description="emerges naked but unharmed";       
            return $description;
        }
        else{
            $description="burns alive"; 
            return $description;
        }
    }
}

