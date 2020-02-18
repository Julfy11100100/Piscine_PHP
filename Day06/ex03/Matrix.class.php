<?php

class Matrix{

    private $_vtcX;
    private $_vtcY;
    private $_vtcZ;
    private $_vtc0;
    public static $verbose = FALSE;

    function __construct(array $matrixargv)
    {
        if (isset($matrixargv['preset'])){

        }
    }

    function __toString()
    {
        return (sprintf("M | vtcX | vtcY | vtcZ | vtc0\n
        -----------------------------\n
        x | ".$this->_vtcX->_x." | ".$this->_vtcY->_x." | ".$this->_vtcZ->_x." | ".$this->_vtc0->_x."\n 
        y | ".$this->_vtcX->_y." | ".$this->_vtcY->_y." | ".$this->_vtcZ->_y." | ".$this->_vtc0->_y."\n
        x | ".$this->_vtcX->_z." | ".$this->_vtcY->_z." | ".$this->_vtcZ->_z." | ".$this->_vtc0->_z."\n
        x | ".$this->_vtcX->_w." | ".$this->_vtcY->_w." | ".$this->_vtcZ->_w." | ".$this->_vtc0->_w."\n"));
    }

    function doc() {
        $str = "";
        if (file_exists("Matrix.doc.txt"))
            $str = file_get_contents("Matrix.doc.txt");
        return ("\n".$str."\n");
    }
}

?>