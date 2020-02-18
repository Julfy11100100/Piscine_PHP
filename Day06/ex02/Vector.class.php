<?php

class Vector {
    
    private $_x;
    private $_y;
    private $_z;
    private $_w;
    static $verbose = FALSE;

    public function __construct(array $vectargv) {
        if(isset($vectargv['dest']))
        {
            $dest = $vectargv['dest'];
            if (isset($vectargv['orig'])) {
                $orig = $vectargv['orig'];
            }
            else {
                $orig = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 1.0));
            }
            $this->_x = $dest->getX() - $orig->getX();
            $this->_y = $dest->getY() - $orig->getY();
            $this->_z = $dest->getZ() - $orig->getZ();
        }
        if (self::$verbose == TRUE) {
            printf($this . " constructed\n");
        }
    }

    public function magnitude()
    {
        return((float)(sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z))));
    }

    public function normalize()
    {
        $k = $this->magnitude();
        $nx = $this->_x * 1/$k;
        $ny = $this->_y * 1/$k;
        $nz = $this->_z * 1/$k;
        return new Vector( array('dest' => new Vertex(array( 'x' => $nx, 'y' => $ny, 'z' => $nz))));
    }

    public function add(Vector $rhs) {
        return new Vector( array('dest' => new Vertex( array('x' => $this->_x + $rhs->_x, 'y' => $this->_y + $rhs->_y, 'z' => $this->_z + $rhs->_z))));
    } 

    public function sub(Vector $rhs) {
        return new Vector( array('dest' => new Vertex( array('x' => $this->_x - $rhs->_x, 'y' => $this->_y - $rhs->_y, 'z' => $this->_z - $rhs->_z))));
    }

    public function opposite() {
        return new Vector( array('dest' => new Vertex( array('x' => $this->_x * -1, 'y' => $this->_y * -1, 'z' => $this->_z * -1))));
    }

    public function scalarProduct ($k) {
        return new Vector( array('dest' => new Vertex( array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k))));
    }

    public function dotProduct(Vector $rhs) {
        return ((float)($this->_x * $rhs->_x+($this->_y * $rhs->_y+($this->_z * $rhs->_z))));
    }

    public function cos(Vector $rhs) {
        return((float)(($this->_x * $rhs->_x + $this->_y * $rhs->_y + $this->_z * $rhs->_z) / ($this->magnitude() * $rhs->magnitude())));     
    }

    public function crossProduct(Vector $rhs) {
        return new Vector( array("dest" => new Vertex( array(
            'x' => $this->_y * $rhs->_z - $this->_z * $rhs->_y,
            'y' => $this->_z * $rhs->_x - $this->_x * $rhs->_z,
            'z' => $this->_x * $rhs->_y - $this->_y * $rhs->_x))));
    }

    public function doc() {
        $str = "";
        if (file_exists("Vector.doc.txt"));
            $str = file_get_contents("Vector.doc.txt");
        return ("\n".$str."\n");
    }

    public function __toString(){
        return (sprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
    }

    public function getX() {return $this->_x; }
    public function getY() {return $this->_y; }
    public function getZ() {return $this->_z; }
    public function getW() {return $this->_W; }

    public function __destruct() {
        if (self::$verbose == TRUE) {
            printf($this . " destructed\n");
        }
    }
}

?>