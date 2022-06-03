<?php
//creer les attributes et les mettre en focntion protected

class Character {


    protected  $name;
    protected $life="50";
    protected $agility="2";
    protected $strength="2";
    protected $wit="2";



   public function __construct($name){
       $this.name = "Jean_Lucas";
        return->$this->name;



   }

   public function getlife($life){

    return $this->life;

    }


    public function getAgilite($agility){

        return $this->agility;
    
        }



        public function getStrength($strength){

            return $this->strength;
        
            }

    public function getWit($wit){

                return $this->wit;
            
                }




}





?>

