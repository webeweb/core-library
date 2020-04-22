<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AlertesHistorique;

/**
 * Alertes historique test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AlertesHistoriqueTest extends AbstractTestCase {

    /**
     * Tests the setArEnvoye() method.
     *
     * @return void
     */
    public function testSetArEnvoye() {

        $obj = new AlertesHistorique();

        $obj->setArEnvoye(true);
        $this->assertEquals(true, $obj->getArEnvoye());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AlertesHistorique();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollabDst() method.
     *
     * @return void
     */
    public function testSetCodeCollabDst() {

        $obj = new AlertesHistorique();

        $obj->setCodeCollabDst("codeCollabDst");
        $this->assertEquals("codeCollabDst", $obj->getCodeCollabDst());
    }

    /**
     * Tests the setCodeCollabOrg() method.
     *
     * @return void
     */
    public function testSetCodeCollabOrg() {

        $obj = new AlertesHistorique();

        $obj->setCodeCollabOrg("codeCollabOrg");
        $this->assertEquals("codeCollabOrg", $obj->getCodeCollabOrg());
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

        $obj = new AlertesHistorique();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateDeclenchement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDeclenchement() {

        // Set a Date/time mock.
        $dateDeclenchement = new DateTime("2018-09-10");

        $obj = new AlertesHistorique();

        $obj->setDateDeclenchement($dateDeclenchement);
        $this->assertSame($dateDeclenchement, $obj->getDateDeclenchement());
    }

    /**
     * Tests the setDateReponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReponse() {

        // Set a Date/time mock.
        $dateReponse = new DateTime("2018-09-10");

        $obj = new AlertesHistorique();

        $obj->setDateReponse($dateReponse);
        $this->assertSame($dateReponse, $obj->getDateReponse());
    }

    /**
     * Tests the setIdAlerteHisto() method.
     *
     * @return void
     */
    public function testSetIdAlerteHisto() {

        $obj = new AlertesHistorique();

        $obj->setIdAlerteHisto(10);
        $this->assertEquals(10, $obj->getIdAlerteHisto());
    }

    /**
     * Tests the setTexteAlerte() method.
     *
     * @return void
     */
    public function testSetTexteAlerte() {

        $obj = new AlertesHistorique();

        $obj->setTexteAlerte("texteAlerte");
        $this->assertEquals("texteAlerte", $obj->getTexteAlerte());
    }

    /**
     * Tests the setTexteReponse() method.
     *
     * @return void
     */
    public function testSetTexteReponse() {

        $obj = new AlertesHistorique();

        $obj->setTexteReponse("texteReponse");
        $this->assertEquals("texteReponse", $obj->getTexteReponse());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
