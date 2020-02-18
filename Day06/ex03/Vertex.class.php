<?php

require_once 'Color.class.php';

Class Vertex {

    private $_x = 0;
    private $_y = 0;
    private $_z = 0;
    private $_w = 1.0;
    private $_color;
    static $verbose = FALSE;

    public function getX() {return $this->_x; }
    public function getY() {return $this->_y; }
    public function getZ() {return $this->_z; }
    public function getW() {return $this->_w; }
    public function getColor() {return $this->_color; }

    public function setX($v) {$this->_x = $v; }
    public function setY($v) {$this->_y = $v; }
    public function setZ($v) {$this->_z = $v; }
    public function setW($v) {$this->_w = $v; }
    public function setColor($v) {$this->_color = $v; }

    public function __construct(array $verargv) {
        if (isset($verargv['x']) && isset($verargv['y']) && isset($verargv['z']))
        {
            $this->setX($verargv['x']);
            $this->setY($verargv['y']);
            $this->setZ($verargv['z']);
        }
        if (isset($verargv['w'])) {
            $this->setW($verargv['w']);}
        if (isset($verargv['color'])) {
            $this->setColor($verargv['color']);}
        else {
            $this->setColor(new Color(array( 'red' => 255, 'green' => 255, 'blue' => 255)));}
        if (self::$verbose) {
            printf($this . " constructed\n");
        }
    }

    function __toString() {
        if (self::$verbose) {
            return (sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, %s )", $this->getX(), $this->getY(), $this->getZ(), $this->getW(), $this->getColor()));}
        return (sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", $this->getX(), $this->getY(), $this->getZ(), $this->getW()));
    }

    function doc() {
        $str = "";
        if (file_exists("Vertex.doc.txt"));
            $str = file_get_contents("Vertex.doc.txt");
        return ("\n".$str."\n");
    }

    function __destruct() {
        if (self::$verbose) {
            printf($this . " destructed\n");}   
    }
}
?>