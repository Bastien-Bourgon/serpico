<?php

namespace App\Controller;

use App\Entity\AddBook;
use App\Entity\Book;
use App\Form\AddBookForm;
use App\Form\DeleteBookForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_homepage")
     */
    public function homepage(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $book = new Book();
        $addbook = $this->createForm(AddBookForm::class, $book);
        $addbook->handleRequest($request);
        $deletebook = $this->createForm(DeleteBookForm::class, $book);
        $deletebook->handleRequest($request);
        if ($addbook->isSubmitted() && $addbook->isValid()) {
            $this->addFlash('success', 'Le livre à été ajouté!');
            $book=$addbook->getData();
            if($book->getSynopsis()===null)
            {
             $book->setSynopsis("Pas de synopsis");
            }
            if($book->getImage()===null)
            {
                $book->setImage("https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png");
            }
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute('main_homepage');
        }
        if ($deletebook->isSubmitted() && $deletebook->isValid()) {
            $this->addFlash('success', 'Le livre à été supprimé!');
            $book=$deletebook->getData();
            $bookid=$book->getId();
            $book=$em->getRepository(Book::class)->find($bookid);
            $em->remove($book);
            $em->flush();
        }
        $books = $em->getRepository(Book::class)->findAll();
        return $this->render('index.html.twig', [
            'form' => $addbook->createView(),
            'deleteform' => $deletebook->createView(),
            'books' =>$books
        ]);
    }


}
