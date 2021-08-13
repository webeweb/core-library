<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PiecesJointes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Pieces jointes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PiecesJointesTest extends AbstractTestCase {

    /**
     * Tests the setAPublierEspaceClient() method.
     *
     * @return void
     */
    public function testSetAPublierEspaceClient(): void {

        $obj = new PiecesJointes();

        $obj->setAPublierEspaceClient(true);
        $this->assertEquals(true, $obj->getAPublierEspaceClient());
    }

    /**
     * Tests the setAPublierWeb() method.
     *
     * @return void
     */
    public function testSetAPublierWeb(): void {

        $obj = new PiecesJointes();

        $obj->setAPublierWeb(true);
        $this->assertEquals(true, $obj->getAPublierWeb());
    }

    /**
     * Tests the setArchive() method.
     *
     * @return void
     */
    public function testSetArchive(): void {

        $obj = new PiecesJointes();

        $obj->setArchive(true);
        $this->assertEquals(true, $obj->getArchive());
    }

    /**
     * Tests the setAuteur() method.
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new PiecesJointes();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new PiecesJointes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new PiecesJointes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new PiecesJointes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNbDocAttache() method.
     *
     * @return void
     */
    public function testSetNbDocAttache(): void {

        $obj = new PiecesJointes();

        $obj->setNbDocAttache(10);
        $this->assertEquals(10, $obj->getNbDocAttache());
    }

    /**
     * Tests the setNomPiece() method.
     *
     * @return void
     */
    public function testSetNomPiece(): void {

        $obj = new PiecesJointes();

        $obj->setNomPiece("nomPiece");
        $this->assertEquals("nomPiece", $obj->getNomPiece());
    }

    /**
     * Tests the setNumPiece() method.
     *
     * @return void
     */
    public function testSetNumPiece(): void {

        $obj = new PiecesJointes();

        $obj->setNumPiece(10);
        $this->assertEquals(10, $obj->getNumPiece());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PiecesJointes();

        $this->assertNull($obj->getAPublierEspaceClient());
        $this->assertNull($obj->getAPublierWeb());
        $this->assertNull($obj->getArchive());
        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbDocAttache());
        $this->assertNull($obj->getNomPiece());
        $this->assertNull($obj->getNumPiece());
    }
}
