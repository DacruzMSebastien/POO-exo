<?php

/**
* Class form
*Permet de générer un formulaire rapidement et simplement
*/

 class Form {


   /**
   * @var array Données utilisées par le formulaire
   */
   private $data;

   /**
   * @var string Tag utilisé pour entourer les champs
   */
   public $paragraph = 'p';


   /**
   * @param array $data Données utilisées par le formulaire
   */
   public function __construct($data = array()){
     $this->data = $data; // j'envoie $data dans l'instance
   }

   /**
   * @param $data Code HTML à entourer
   * @return string
   */
   private function paragraph($p){
     return "<{$this->paragraph}>$p</{$this->paragraph}>";
   }

   private function getValue($index){
     return isset($this->data[$index]) ? $this->data[$index] : null; // structure ternaire

   }
    /**
    * @param $username string
    * return string
    */
   public function input($field){ // génère un champ texte
    return  $this->paragraph(
      '<label>' . $field .'</label><input type="text name="' . $field .'"  value="' . $this->getValue($field) . '">', 'p');
   }

   public function checkbox($field){ // génère un champ checkbox
    return  $this->paragraph(
      '<label>' . $field .'</label>
      <input type="checkbox" value="Femme">
      <input type="checkbox" value="Homme">');


   }

   public function radio($field){ // génère un champ radio
     return $this->paragraph(
      '<label>' . $field .'</label>
      <input type="radio" name="' . $field .'"  value="' . $this->getValue($field) . '">
      <input type="radio" name="' . $field .'"  value="' . $this->getValue($field) . '">', 'p');
   }

   public function textarea($field){ // génère un champ radio
     return $this->paragraph(
      '<label>' . $field .'</label><textarea></textarea>', 'p');
   }


   /**
   * @param string
   * @return string
   */
   public function submit(){
     return $this->paragraph( '<button type="submit">Envoyer</button>');
   }

 }
?>
