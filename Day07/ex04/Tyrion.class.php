<?php

class Tyrion extends Lannister {
    public function sleepWith($a)
    {
        if ($a instanceof Sansa)
            print ("Let's do this.\n");
        else
            print ("Not even if I'm drunk !\n");
    }
}

?>