<?php

class Jaime{
    
    public function sleepWith($para){
        if($para instanceof Tyrion)
            print('Not even if I\'m drunk !'."\n");
        else if($para instanceof Sansa)
            print('Let\'s do this.'."\n");
        else if($para instanceof Cersei)
            print('With pleasure, but only in a tower in Winterfell, then.'."\n");
    }
}

?>