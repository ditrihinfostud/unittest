<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Movie;
use App\Entity\Author;

class MovieTest extends TestCase
{
    public function testMovieHasAName()
    {
        $movie = new Movie();
        $movieName = 'Avengers';

        $this->assertSame(null, $movie->getName());
        
        $movie->setName($movieName);

        $this->assertSame($movieName, $movie->getName());
    }

    public function testMovieHasAuthor()
    {
        $movie = new Movie();
        $author = new Author();

        $movie->addAuthor($author);
        
        //Examples
        $this->assertSame($author, $movie->getAuthors()[0]);
        $this->assertGreaterThan(0, count($movie->getAuthors()));
        $this->assertInstanceOf(Author::class, $movie->getAuthors()[0]);
    }
}