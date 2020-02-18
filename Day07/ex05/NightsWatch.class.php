<?php

class NightsWatch implements IFighter {

    public $tab = array();

    public function recruit($a){
        $this->tab[] = $a;
    }

    public function fight() {
        foreach ($this->tab as $elem)
        {
            if ($elem instanceof IFighter)
                $elem->fight();
        }
    }

}

?>