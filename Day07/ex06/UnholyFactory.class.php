<?php

class UnholyFactory {

	public $Atab = array();

	public function absorb($a) {
		if (!($a instanceof Fighter)) {
			print ("(Factory can't absorb this, it's not a fighter)\n");
			return (0);
		}
		if (empty($this->Atab))
		{
			print ("(Factory absorbed a fighter of type ".$a->_type.")\n");
			$this->Atab[] = $a;
		}
		else
		{
			foreach ($this->Atab as $elem)
        	{
				if ($a == $elem) {
					print ("(Factory already absorbed a fighter of type ".$a->_type.")\n");
					return (0);
				}
			}
			print ("(Factory absorbed a fighter of type ".$a->_type.")\n");
			$this->Atab[] = $a;
		}
	}

	public function fabricate($a) {
		foreach($this->Atab as $t)
		{
			if ($a == $t->_type){
				print ("(Factory fabricates a fighter of type ".$t->_type.")\n");
				return ($t);
			}
		}
		print ("(Factory hasn't absorbed any fighter of type ".$a.")\n");
		return (0);
	}
}


?>