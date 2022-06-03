<?php
//dans un premier temps creer une focntion objet donc j'opte
//pour une class qui comporte 2 methodes


class Comparaison {

public $name='test';

public function objet1($name){

        return $this->name;




        }
  

 public function objet2(){






 }

}



$display=new Comparaison();
$show=$display->objet1($name);

var_dump($show);

?>