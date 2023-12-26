<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class EquipsController {

    private $equips = array(
        array("codi" => "1", "nom" => "Equip Roig", "cicle" =>"DAW", "curs"
        =>"22/23", "membres" => array("Elena","Vicent","Joan","Maria")),

        array("codi" => "2", "nom" => "Equip Verd", "cicle" =>"DAM", "curs"
        =>"22/23", "membres" => array("Elena","Vicent","Joan","Pepe")),

        array("codi" => "3", "nom" => "Equip Groc", "cicle" =>"ASIX", "curs"
        =>"22/23", "membres" => array("Jose","Alex","Joan","Maria")),

        array("codi" => "4", "nom" => "Equip Blau", "cicle" =>"DAWN", "curs"
        =>"22/23", "membres" => array("Dualdin","Vicent","Joan","Josep")),
        );


    #[Route('/equips/{codi}' ,name:'dades_equip')]

    public function dadesEquip($codi) {
        $resultat = array_filter($this->equips, function($equip) use ($codi) {
            return $equip["codi"] == $codi;
        });
    
        if (count($resultat) > 0){
            $resposta = "";
            $resultat = array_shift($resultat); # Toma el primer elemento
            $resposta .= "<h1>Dades de l'Equip</h1>";
            $resposta .= "<ul>";
            $resposta .= "<li>Codi: " . $resultat["codi"] . "</li>";
            $resposta .= "<li>Nom: " . $resultat["nom"] . "</li>";
            $resposta .= "<li>Cicle: " . $resultat["cicle"] . "</li>";
            $resposta .= "<li>Curs: " . $resultat["curs"] . "</li>";
            $resposta .= "<li>Membres:";
            $resposta .= "<ul>";
            foreach ($resultat["membres"] as $membre) {
                $resposta .= "<li>$membre</li>";
            }
            $resposta .= "</ul>";
            $resposta .= "</li>";
            $resposta .= "</ul>";
            return new Response("<html><body>$resposta</body></html>");
        } else {
            return new Response("Equip no trobat amb codi: ". $codi);
        }
        }
    }
?>