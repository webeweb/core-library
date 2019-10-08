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
 * Alertes historique model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AlertesHistoriqueTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AlertesHistorique();

        $this->assertNull($obj->getAREnvoye());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollabDST());
        $this->assertNull($obj->getCodeCollabORG());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDeclenchement());
        $this->assertNull($obj->getDateReponse());
        $this->assertNull($obj->getIDAlerteHisto());
        $this->assertNull($obj->getTexteAlerte());
        $this->assertNull($obj->getTexteReponse());
    }

    /**
     * Tests the setAREnvoye() method.
     *
     * @return void
     */
    public function testSetAREnvoye() {

        $obj = new AlertesHistorique();

        $obj->setAREnvoye(true);
        $this->assertEquals(true, $obj->getAREnvoye());
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
     * Tests the setCodeCollabDST() method.
     *
     * @return void
     */
    public function testSetCodeCollabDST() {

        $obj = new AlertesHistorique();

        $obj->setCodeCollabDST("codeCollabDST");
        $this->assertEquals("codeCollabDST", $obj->getCodeCollabDST());
    }

    /**
     * Tests the setCodeCollabORG() method.
     *
     * @return void
     */
    public function testSetCodeCollabORG() {

        $obj = new AlertesHistorique();

        $obj->setCodeCollabORG("codeCollabORG");
        $this->assertEquals("codeCollabORG", $obj->getCodeCollabORG());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        $obj = new AlertesHistorique();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateDeclenchement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDeclenchement() {

        $obj = new AlertesHistorique();

        $obj->setDateDeclenchement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDeclenchement());
    }

    /**
     * Tests the setDateReponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReponse() {

        $obj = new AlertesHistorique();

        $obj->setDateReponse(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReponse());
    }

    /**
     * Tests the setIDAlerteHisto() method.
     *
     * @return void
     */
    public function testSetIDAlerteHisto() {

        $obj = new AlertesHistorique();

        $obj->setIDAlerteHisto(10);
        $this->assertEquals(10, $obj->getIDAlerteHisto());
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
}
