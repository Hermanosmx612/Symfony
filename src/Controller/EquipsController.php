<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\ServeiDadesEquips;

class EquipsController extends AbstractController{
    private $equips;
    public function __construct(ServeiDadesEquips $dades){
        $this->equips = $dades->get();
    }

    #[Route('/equips/{codi}' ,name:'dades_equip')]

    public function dadesEquip($codi = 1) {
        return $this->render('dades_equip.html.twig', [
            'equips' => $this->equips,
            'codi' => $codi,
        ]);


        }
    }
?>