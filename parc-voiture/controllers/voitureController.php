<?php

class Voiture {

// PRORIETES


public $marque;  //Disponibilité
public $stock;  //Du véhicule

public $poids; //Utilisation
public $utile; //Du véhicule

public $immat; //Pays d'où provient
public $pays; //Le véhicule

public $km;       //Usure en fct° de
private $distance; //La distance parcourue

public $date;
public $modele;
public $couleur;




public function __construct ($immat, $date, $km, $modele, $marque, $couleur, $poids){
  $this->immat = $immat;
  $this->date = $date;
  $this->km = $km;
  $this->modele = $modele;
  $this->marque = $marque;
  $this->couleur = $couleur;
  $this->poids = $poids;
}

// METHODES


// Usure en fct° de la distance parcourue
//
public function rouler(){
  $this->km += $distance; // = km = km + $distance
  return $this->getDistance();
}

public function getDistance(){
  if ($this->km < 100000)
{
  $this->distance = 'Low';
  return $this->distance;
}
elseif ($this->km > 100000 AND $km < 200000)
{
  $this->distance = 'Middle';
  return $this->distance;
}
else
{
  $this->distance = 'High';
  return $this->distance;
}

}

// Disponibilité du véhicule
public function available(){
  if ($this->marque === 'Audi'){  // 3 === car même type d'objets?
    $this->stock = 'Reserved';
    return $this->enStock();
  }else{
    $this->stock = 'Free';
    return $this->enStock();
  }
}
public function enStock(){
  return $this->stock;
}



// Utilisation du véhicule
public function use(){
  if ($this->poids > 3500){
    $this->utile = 'Utilitaire';
    return $this->utility();
  }else{
    $this->utile = 'Commerciale';
    return $this->utility();
  }
}
public function utility(){
  return $this->utile;
}

// Pays en fct° de la plaque
public function localisation(){
  if (strpos($this->immat, 'BE') === 0){
    $this->pays = 'Pays = BELGIQUE ';
    return $this->getCountry();
}

  elseif(strpos($this->immat, 'FR') === 0){
    $this->pays = 'Pays = FRANCE';
    return $this->getCountry();
}
  elseif(strpos($this->immat, 'DE') === 0){
    $this->pays = 'Pays = DEUTSCHLAND';
  }
  else{}
}
public function getCountry(){
  return $this->pays;
}


public function age()
{
    $now = new DateTime();
    $date_de_creation = new DateTime($this->date);

    $interval = $date_de_creation->diff($now);
    return $interval->format('%Y années d\'ancienneté');
}
public function display(){
		return (' <table>
					<tr>
					<th>Marque</th>
					<th>Modèle</th>
					<th>Couleur</th>
					<th>Mise en circu</th>
					<th>Nombre de KM</th>
					<th>Usure</th>
					<th>Poids</th>
					<th>Pays</th>
					<th>Status</th>
					<th>Catégorie</th>
				  </tr>
				  <tr>
				  	<td>'.$this->modele.'</td>
				  	<td>'.$this->marque.'</td>
				  	<td>'.$this->couleur.'</td>
				  	<td>'.$this->dateMiseCircu.'</td>
				  	<td>'.$this->km.'</td>
				  	<td>'.$this->usage.'</td>
				  	<td>'.$this->weight.'</td>
				  	<td>'.$this->country.'</td>
				  	<td>'.$this->status.'</td>
				  	<td>'.$this->categorie.'</td>
				  	<img src="'.$this->picPath.'" alt="car"/>
				  </tr>
				  </table>'
				  );
	}

}

?>
