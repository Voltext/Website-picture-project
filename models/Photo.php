<?php
class Photo
{
	private $_pho_id;
	private $_pho_titre;
	private $_pho_description;
	private $_pho_usr_id;
	private $_pho_date;

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	public function hydrate(array $data)
	{
		foreach($data as $key=>$value)
		{
			$method = 'set'.ucfirst($key);

			if(method_exists($this, $method))
				$this->$method($value);
		}
	}

	//SETTER
	public function setPho_id($id)
	{
		$id = (int) $id;

		if($id > 0)
			$this->_pho_id = $id;
	}
	public function setPho_usr_id($user_id)
	{
		$user_id = (int) $user_id;

		if($user_id > 0)
			$this->_pho_usr_id = $user_id;
	}
	public function setPho_titre($title)
	{
		if(is_string($title))
			$this->_pho_titre = $title;
	}
	public function setPho_description($content)
	{
		if(is_string($content))
			$this->_pho_description = $content;
	}
	public function setPho_date($date)
	{
		$this->pho_date = $date;
	}

	//	GETTERS
	public function id()
	{
		return $this->_pho_id;
	}
	public function title()
	{
		return $this->_pho_titre;
	}
	public function content()
	{
		return $this->_pho_description;
	}
	public function user_id()
	{
		return $this->_pho_usr_id;
	}
	public function date()
	{
		return $this->_pho_date;
	}
	public function 
}