<?php
class ControllerAccueil
{
	private $_photoManager;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) > 1)
			throw new Exception('Page introubale');
		else
			$this->photos();
	}

	private function photos()
	{
		$this->_photoManager = new PhotoManager;
		$photos = $this->_photoManager->getPhotos();

		require_once('views/viewAccueil.php');
	}
}