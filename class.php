<?php
	class reservation{
        private $_ID;
		private $_Nom;
		private $_email;
		private $_telephone;
		private $_type;
		private $_special;
		private $_date;
		private $_nbPersonne;
		private $_heure;
	
	public function __construct($array = null){
 		if($array){
 			//$date = $array['date'];
 			//		print($date);
 			$this->hydrate($array);
 		}
 	}
 	
 	public function hydrate($donnees){
 		foreach ($donnees as $key => $value) {
 			//on recupère le nom du setter correspondant a l'attribut
 			$method = 'set'.ucfirst($key);
 			print($method);

 			//si le setter correspondant existe
 			if (method_exists($this, $method)){
 				
 				//on appelle le setter
 				$this->$method($value);
 			}
 		}
 	}
    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->_ID;
    }

    /**
     * @param mixed $_ID
     *
     * @return self
     */
    public function setID($_ID)
    {
        $this->_ID = $_ID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_Nom;
    }

    /**
     * @param mixed $_Nom
     *
     * @return self
     */
    public function setNom($_Nom)
    {
        $this->_Nom = $_Nom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $_email
     *
     * @return self
     */
    public function setEmail($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->_telephone;
    }

    /**
     * @param mixed $_telephone
     *
     * @return self
     */
    public function setTelephone($_telephone)
    {
        $this->_telephone = $_telephone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $_type
     *
     * @return self
     */
    public function setType($_type)
    {
        $this->_type = $_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecial()
    {
        return $this->_special;
    }

    /**
     * @param mixed $_special
     *
     * @return self
     */
    public function setSpecial($_special)
    {
        $this->_special = $_special;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $_date
     *
     * @return self
     */
    public function setDate($_date)
    {
        $this->_date = $_date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbPersonne()
    {
        return $this->_nbPersonne;
    }

    /**
     * @param mixed $_nbPersonne
     *
     * @return self
     */
    public function setNbPersonne($_nbPersonne)
    {
        $this->_nbPersonne = $_nbPersonne;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->_heure;
    }

    /**
     * @param mixed $_heure
     *
     * @return self
     */
    public function setHeure($_heure)
    {
        $this->_heure = $_heure;

        return $this;
    }
}