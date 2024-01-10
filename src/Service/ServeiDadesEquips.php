<?php
namespace App\Service;
class ServeiDadesEquips{
    private $equips = array(
        array("codi" => "1", "nom" => "Equip Roig", "cicle" =>"DAW", "curs"
        =>"22/23", "membres" => array("Elena","Vicent","Joan","Maria"), "imatge" => "equip1.png"),

        array("codi" => "2", "nom" => "Equip Verd", "cicle" =>"DAM", "curs"
        =>"22/23", "membres" => array("Elena","Vicent","Joan","Pepe"), "imatge" => "equip2.png"),

        array("codi" => "3", "nom" => "Equip Groc", "cicle" =>"ASIX", "curs"
        =>"22/23", "membres" => array("Jose","Alex","Joan","Maria"), "imatge" => "equip3.jpg"),

        array("codi" => "4", "nom" => "Equip Blau", "cicle" =>"DAWN", "curs"
        =>"22/23", "membres" => array("Dualdin","Vicent","Joan","Josep"), "imatge" => "equip4.png"),
        );


    public function get(){
        return $this->equips;
    }   
}
?>