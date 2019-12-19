<?php

include_once('IFighter.class.php');

class NightsWatch implements IFighter{
    public function recruit($person){
        if($person instanceof IFighter){
            return $person->fight();
        }
    //    if(method_exists($person, 'fight')){
    //        return $person->fight();
    //    }
    }
    public function fight(){}
}
?>