<?php 
class Baseconfig {
  public $var = '';
	public function init()
	{
		require_once __DIR__ .'/vendor/autoload.php';
	}
	public function get()
	{
		return $this->var;
	}
	public function set($newVar)
	{
	  	$this->var=$newVar;
		return $this->var;
	}
}

?>
