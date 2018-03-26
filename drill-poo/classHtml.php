<?php
// class HTML

class Html {

public $head = '<!DOCTYPE html><html><head>';
public $css;
public $meta;
public $title;
public $link_img;
public $link_a;
public $js;

public function __construct($css, $meta, $link_img, $link_a, $js){
  $this->css = $css;
  $this->meta = $meta;
  $this->title = $title;
  $this->link_img = $link_img;
  $this->link_a = $link_a;
  $this->js =$js;
}

public function head(){
  return $this->head;
}

public function linkCss(){
  return  '<link rel="stylesheet" href="' . $this->css . '">';
}

public function linkMeta(){
  return '<meta charset="' . $this->meta .'">';
}

public function title(){
   return '<title>' . $this->title . '</title></head><body>';
 }

 public function linkA(){
   return '<a href="' . $this->link_a . '">'. $this->link_a .'</a>';
 }

 public function linkImg(){
   return '<img src="' .$this->link_img .'">';
 }

 public function linkJs(){
   return '<script> '. $this->js .' </script>' ;
 }

}

 ?>
