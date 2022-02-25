<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\PiecesJointes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Pieces jointes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class PiecesJointesTest extends AbstractTestCase {

    /**
     * Tests setAuteur()
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new PiecesJointes();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Tests setDateCreation()
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
     * Tests setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new PiecesJointes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new PiecesJointes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNomPiece()
     *
     * @return void
     */
    public function testSetNomPiece(): void {

        $obj = new PiecesJointes();

        $obj->setNomPiece("nomPiece");
        $this->assertEquals("nomPiece", $obj->getNomPiece());
    }

    /**
     * Tests setNumPiece()
     *
     * @return void
     */
    public function testSetNumPiece(): void {

        $obj = new PiecesJointes();

        $obj->setNumPiece(10);
        $this->assertEquals(10, $obj->getNumPiece());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PiecesJointes();

        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNomPiece());
        $this->assertNull($obj->getNumPiece());
    }
}
