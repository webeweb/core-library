<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\PiecesJointes;

/**
 * Pieces jointes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class PiecesJointesTest extends AbstractTestCase {

    /**
     * Tests the setAuteur() method.
     *
     * @return void
     */
    public function testSetAuteur() {

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
    public function testSetDateCreation() {

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
    public function testSetIndice() {

        $obj = new PiecesJointes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new PiecesJointes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNomPiece() method.
     *
     * @return void
     */
    public function testSetNomPiece() {

        $obj = new PiecesJointes();

        $obj->setNomPiece("nomPiece");
        $this->assertEquals("nomPiece", $obj->getNomPiece());
    }

    /**
     * Tests the setNumPiece() method.
     *
     * @return void
     */
    public function testSetNumPiece() {

        $obj = new PiecesJointes();

        $obj->setNumPiece(10);
        $this->assertEquals(10, $obj->getNumPiece());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new PiecesJointes();

        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNomPiece());
        $this->assertNull($obj->getNumPiece());
    }
}
