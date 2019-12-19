<?php
class UnholyFactory{
    
    private $_absorbedType = array(
        "Footsoldier" => 0,
        "Archer" => 0,
        "Assassin" => 0,
    );
    private $_absorbedInstance = array(
    );

    public function absorb($instance){
        if($instance instanceof Footsoldier){           
            if($this->_absorbedType['Footsoldier'] !== 0)
                print('(Factory already absorbed a fighter of type foot soldier)'."\n");
            else{
                print('(Factory absorbed a fighter of type foot soldier)'."\n");
                $this->_absorbedInstance['Footsoldier'] = $instance;
            }
            $this->_absorbedType['Footsoldier']++;
        }
        if($instance instanceof Archer){
            if($this->_absorbedType['Archer'] !== 0)
                print('(Factory already absorbed a fighter of type archer)'."\n");
            else{
                print('(Factory absorbed a fighter of type archer)'."\n");
                $this->_absorbedInstance['Archer'] = $instance;
            }
            $this->_absorbedType['Archer']++;
        }
        if($instance instanceof Assassin){
            if($this->_absorbedType['Assassin'] !== 0)
                print('(Factory already absorbed a fighter of type assassin)'."\n");
            else{
                print('(Factory absorbed a fighter of type assassin)'."\n");
                $this->_absorbedInstance['Assassin'] = $instance;
            }
            $this->_absorbedType['Assassin']++;
        }
        if($instance instanceof Llama){    
            print('(Factory can\'t absorb this, it\'s not a fighter)'."\n");
        }
    }

    public function fabricate($fighter_type){
        if($fighter_type === "foot soldier")
        {
            print('(Factory fabricates a fighter of type foot soldier)'."\n");
            return (clone($this->_absorbedInstance['Footsoldier']));
        }        
        if($fighter_type === "archer"){
            print('(Factory fabricates a fighter of type archer)'."\n");
            return (clone($this->_absorbedInstance['Archer']));
        }
        if($fighter_type === "assassin"){
            print('(Factory fabricates a fighter of type assassin)'."\n");
            return (clone($this->_absorbedInstance['Assassin']));
        }
        if($fighter_type === "llama")
            print('(Factory hasn\'t absorbed any fighter of type llama)'."\n");
    }
}

?>