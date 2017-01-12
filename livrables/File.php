<?php
class File
{
	private $name;
	private $currentOpen;

	public function createFile()
	{
		$name = "/fichier.txt";
	}

	public function openFile()
	{
		$currentOpen = (fopen("$name",'a+'));
	}

	public function closeFile()
	{
		fclose($currentOpen);
	}

	public function write()
	{
		fwrite($name,argv);
	}


}
?>
