<?php 
class PhotoManager extends Model
{
	public function getPhotos()
	{
		$this->getBdd();
		return $this->getData('photo', 'Photo');
	}
}