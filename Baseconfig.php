class Baseconfig {
  public $var = '';
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
