<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\Get; // N'oublons pas d'inclure Get
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations



class PlaceController extends Controller {

      /**
     * @Get("/places")
     */
    
    /**
 * Collection get action
 * @var Request $request
 * @return array
 *
 * @Rest\View()
 */
    
 public function getPlacesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
     
        $em = $this->getDoctrine()->getManager() ; 
        $query = $em->createQuery("SELECT p FROM AppBundle\Entity\Place p left join p.user u ");
        $users = $query->getResult();
    

        $formatted = [];
        foreach ($users as $place) {
            $formatted[] = [
               'id' => $place->getId(),
               'name' => $place->getName(),
               'address' => $place->getAdress(),
                array(
                        'userId'        => $place->getUser()->getId(),
                        'userName'      => $place->getUser()->getName() , 
                        'userPassword'  => $place->getUser()->getPassord() , 
                )
               
            ];
        }

        // Création d'une vue FOSRestBundle
        $view = View::create($formatted);
        $view->setFormat('xml');

        return $view;
    }

     /**
     * @Get("/places/{id}")
     */
    public function getPlaceAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $place = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Place')
                ->find($request->get('id'));
        /* @var $place Place */

        if (empty($place)) {
            return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [
           'id' => $place->getId(),
           'name' => $place->getName(),
           'address' => $place->getAdress(),
        ];

        // Création d'une vue FOSRestBundle
        $view = View::create($formatted);
        $view->setFormat('xml');

        return $view;
    }
}