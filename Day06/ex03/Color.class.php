<?php

Class Color {

    public $red = 0;
    public $green = 0;
    public $blue = 0;
    public static $verbose = FALSE;

    function __construct( array $colargv) {
        if (array_key_exists('rgb', $colargv))
        {
            $rgb = intval($colargv['rgb']);
            $this->red = ($rgb >> 16) & 255;
            $this->green = ($rgb >> 8) & 255;
            $this->blue = $rgb & 255;
        }
        else if (array_key_exists('red', $colargv) && array_key_exists('green', $colargv)
        && array_key_exists('blue', $colargv))
        {
            $this->red = $colargv['red'];
            $this->green = $colargv['green'];
            $this->blue = $colargv['blue'];   
        }
        if (self::$verbose == TRUE) {
            printf($this . " constructed.\n");}
        return;
    }

    function add($color) {
        return (new Color(array('red' => $this->red + $color->red, 'green' => $this->green + $color->green, 'blue' => $this->blue + $color->blue )));
    } 

    function sub($color) {
        return (new Color(array('red' => $this->red - $color->red, 'green' => $this->green - $color->green, 'blue' => $this->blue - $color->blue )));
    }

    function mult($k) {
        return (new Color(array('red' => $this->red * $k, 'green' => $this->green * $k, 'blue' => $this->blue * $k)));
    }

    function doc() {
        $str = "";
        if (file_exists("Color.doc.txt"));
            $str = file_get_contents("Color.doc.txt");
        return ("\n".$str."\n");
    }

    function __toString() {
        return (sprintf("Color( red:% 4d, green:% 4d, blue:% 4d )", $this->red, $this->green, $this->blue));
    }

    function __destruct() {
        if (self::$verbose == TRUE) {
            printf($this . " destructed.\n");}
        return;
    }
}
?>