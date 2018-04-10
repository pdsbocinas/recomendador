<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Productos;
use AppBundle\Form\ProductosType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('./base.html.twig');
    }

    /**
     * @Route("/create", name="create")
     */
    public function createAction(Request $request)
    {
        // Inserta un dato nuevo
        $producto = new Productos();
        $producto->setName('Bate de Beisbol');
        $producto->setDescription('palo de mader');
        $producto->setPrice(95);

        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);

        $flush = $em->flush();

        if( $flush != null ) {
          echo('no se creo');
        } else {
          echo('Se creo bien');
        }

        die();
    }
     /**
     * @Route("/read", name="read")
     */
    public function readAction(Request $request)
    {

      $em = $this->getDoctrine()->getManager();
      $productos_repo = $em->getRepository("AppBundle:Productos");
      $productos = $productos_repo->findAll();

      foreach($productos as $producto){
        echo $producto->getName()."<br>";
        echo $producto->getDescription()."<br>";
        echo $producto->getPrice()."<br><hr>";
      }

      die();
    }

    /**
    * @Route("/update/{id}/{name}/{description}/{price}", name="update")
    */
   public function updateAction($id, $name, $description, $price)
   {
     // Si meto un id distinto tira error
     $em = $this->getDoctrine()->getManager();
     $productos_repo = $em->getRepository("AppBundle:Productos");

     $producto = $productos_repo->find($id);
     $producto->setName($name);
     $producto->setDescription($description);
     $producto->setPrice($price);

     $em->persist($producto);
     $flush = $em->flush();

     if( $flush != null ) {
       echo('No se actualizo');
     } else {
       echo('se actualizo correctamente');
     }

     die();

   }

   /**
   * @Route("/remove/{id}", name="delete")
   */
  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $productos_repo = $em->getRepository("AppBundle:Productos");

     $producto = $productos_repo->find($id);
     $em->remove($producto);

     $flush = $em->flush();

     if( $flush != null ) {
       echo('No se borro');
     } else {
       echo('se borro correctamente');
     }

     die();
  }


  /**
  * @Route("/form", name="form")
  */
  public function formAction()
  {
      $producto = new Productos();
      $form = $this->createForm(ProductosType::class, $producto);

      return $this->render('default/form.html.twig',array(

        'form' => $form->createView()

      ));

  }
}
