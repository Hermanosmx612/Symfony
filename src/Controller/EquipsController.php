<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EquipsController extends AbstractController{

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

    public function dadesEquip($codi = 1) {
        return $this->render('dades_equip.html.twig', [
            'equips' => $this->equips,
            'codi' => $codi,
        ]);


        }
    }
?>