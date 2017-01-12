<?php
class Entity
{
	protected $key;
	protected $value;

	public function getKey()
	{
		return $this -> key;
	}

	public function getValue()
	{
		return $this -> value;
	}

	public function setKey($key)
	{
		$this -> key = $key;
	}

	public function setValue($value)
	{
		$this -> value = $value;
	}
	
}
?>
