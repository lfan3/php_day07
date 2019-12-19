<?php

    class Tyrion{
        public function sleepWith($para){
            if($para instanceof Jaime)
                print('Not even if I\'m drunk !'."\n");
            else if($para instanceof Sansa)
                print('Let\'s do this.'."\n");
            else if($para instanceof Cersei)
                print('Not even if I\'m drunk !'."\n");
        }
    }

?>