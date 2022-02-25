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
use WBW\Library\Quadratus\Model\QGI\AlertesHistorique;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Alertes historique test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AlertesHistoriqueTest extends AbstractTestCase {

    /**
     * Tests setArEnvoye()
     *
     * @return void
     */
    public function testSetArEnvoye(): void {

        $obj = new AlertesHistorique();

        $obj->setArEnvoye(true);
        $this->assertEquals(true, $obj->getArEnvoye());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AlertesHistorique();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollabDst()
     *
     * @return void
     */
    public function testSetCodeCollabDst(): void {

        $obj = new AlertesHistorique();

        $obj->setCodeCollabDst("codeCollabDst");
        $this->assertEquals("codeCollabDst", $obj->getCodeCollabDst());
    }

    /**
     * Tests setCodeCollabOrg()
     *
     * @return void
     */
    public function testSetCodeCollabOrg(): void {

        $obj = new AlertesHistorique();

        $obj->setCodeCollabOrg("codeCollabOrg");
        $this->assertEquals("codeCollabOrg", $obj->getCodeCollabOrg());
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

        $obj = new AlertesHistorique();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateDeclenchement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDeclenchement(): void {

        // Set a Date/time mock.
        $dateDeclenchement = new DateTime("2018-09-10");

        $obj = new AlertesHistorique();

        $obj->setDateDeclenchement($dateDeclenchement);
        $this->assertSame($dateDeclenchement, $obj->getDateDeclenchement());
    }

    /**
     * Tests setDateReponse()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReponse(): void {

        // Set a Date/time mock.
        $dateReponse = new DateTime("2018-09-10");

        $obj = new AlertesHistorique();

        $obj->setDateReponse($dateReponse);
        $this->assertSame($dateReponse, $obj->getDateReponse());
    }

    /**
     * Tests setIdAlerteHisto()
     *
     * @return void
     */
    public function testSetIdAlerteHisto(): void {

        $obj = new AlertesHistorique();

        $obj->setIdAlerteHisto(10);
        $this->assertEquals(10, $obj->getIdAlerteHisto());
    }

    /**
     * Tests setTexteAlerte()
     *
     * @return void
     */
    public function testSetTexteAlerte(): void {

        $obj = new AlertesHistorique();

        $obj->setTexteAlerte("texteAlerte");
        $this->assertEquals("texteAlerte", $obj->getTexteAlerte());
    }

    /**
     * Tests setTexteReponse()
     *
     * @return void
     */
    public function testSetTexteReponse(): void {

        $obj = new AlertesHistorique();

        $obj->setTexteReponse("texteReponse");
        $this->assertEquals("texteReponse", $obj->getTexteReponse());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AlertesHistorique();

        $this->assertNull($obj->getArEnvoye());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollabDst());
        $this->assertNull($obj->getCodeCollabOrg());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDeclenchement());
        $this->assertNull($obj->getDateReponse());
        $this->assertNull($obj->getIdAlerteHisto());
        $this->assertNull($obj->getTexteAlerte());
        $this->assertNull($obj->getTexteReponse());
    }
}
