<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Book;


final class DefaultController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function home(): Response
    {
        $bookRepository = $this->em->getRepository(Book::class);
        $books = $bookRepository->findBy([], ['title' => 'ASC']);

        return $this->render('index.html.twig', [
            'books' => $books,
        ]);
    }

    public function book($id): Response
    {
        $bookRepository = $this->em->getRepository(Book::class);
        $book = $bookRepository->find($id);

        return $this->render('book.html.twig', [
            'book' => $book,
        ]);
    }
}
