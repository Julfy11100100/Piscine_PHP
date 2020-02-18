<?php

class Jaime extends Lannister {
    public function sleepWith($a)
    {
        if ($a instanceof Lannister)
        {
            if ($a instanceof Cersei)
                print("With pleasure, but only in a tower in Winterfell, then.\n");
            else
                print ("Not even if I'm drunk !\n");
        }
        else if ($a instanceof Stark)
            print ("Let's do this.\n");
    }
}

?>