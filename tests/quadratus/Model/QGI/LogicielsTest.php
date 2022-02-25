<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Logiciels;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Logiciels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LogicielsTest extends AbstractTestCase {

    /**
     * Tests setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new Logiciels();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Logiciels();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeIntervenant()
     *
     * @return void
     */
    public function testSetCodeIntervenant(): void {

        $obj = new Logiciels();

        $obj->setCodeIntervenant("codeIntervenant");
        $this->assertEquals("codeIntervenant", $obj->getCodeIntervenant());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Logiciels();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setDateAchat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAchat(): void {

        // Set a Date/time mock.
        $dateAchat = new DateTime("2018-09-10");

        $obj = new Logiciels();

        $obj->setDateAchat($dateAchat);
        $this->assertSame($dateAchat, $obj->getDateAchat());
    }

    /**
     * Tests setDateFinMaint()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinMaint(): void {

        // Set a Date/time mock.
        $dateFinMaint = new DateTime("2018-09-10");

        $obj = new Logiciels();

        $obj->setDateFinMaint($dateFinMaint);
        $this->assertSame($dateFinMaint, $obj->getDateFinMaint());
    }

    /**
     * Tests setIndiceAff()
     *
     * @return void
     */
    public function testSetIndiceAff(): void {

        $obj = new Logiciels();

        $obj->setIndiceAff(10);
        $this->assertEquals(10, $obj->getIndiceAff());
    }

    /**
     * Tests setMaintenance()
     *
     * @return void
     */
    public function testSetMaintenance(): void {

        $obj = new Logiciels();

        $obj->setMaintenance(true);
        $this->assertEquals(true, $obj->getMaintenance());
    }

    /**
     * Tests setMontantMaint()
     *
     * @return void
     */
    public function testSetMontantMaint(): void {

        $obj = new Logiciels();

        $obj->setMontantMaint(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantMaint());
    }

    /**
     * Tests setNomLogiciel()
     *
     * @return void
     */
    public function testSetNomLogiciel(): void {

        $obj = new Logiciels();

        $obj->setNomLogiciel("nomLogiciel");
        $this->assertEquals("nomLogiciel", $obj->getNomLogiciel());
    }

    /**
     * Tests setNumLicence()
     *
     * @return void
     */
    public function testSetNumLicence(): void {

        $obj = new Logiciels();

        $obj->setNumLicence("numLicence");
        $this->assertEquals("numLicence", $obj->getNumLicence());
    }

    /**
     * Tests setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Logiciels();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests setSousCategorie()
     *
     * @return void
     */
    public function testSetSousCategorie(): void {

        $obj = new Logiciels();

        $obj->setSousCategorie("sousCategorie");
        $this->assertEquals("sousCategorie", $obj->getSousCategorie());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Logiciels();

        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeIntervenant());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateAchat());
        $this->assertNull($obj->getDateFinMaint());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getMaintenance());
        $this->assertNull($obj->getMontantMaint());
        $this->assertNull($obj->getNomLogiciel());
        $this->assertNull($obj->getNumLicence());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getSousCategorie());
    }
}
