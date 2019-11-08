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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AlertesEnCours;

/**
 * Alertes en cours test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AlertesEnCoursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AlertesEnCours();

        $this->assertNull($obj->getArDemande());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollabDst());
        $this->assertNull($obj->getCodeCollabOrg());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDeclenchement());
        $this->assertNull($obj->getIdAlerte());
        $this->assertNull($obj->getTexteAlerte());
    }

    /**
     * Tests the setArDemande() method.
     *
     * @return void
     */
    public function testSetArDemande() {

        $obj = new AlertesEnCours();

        $obj->setArDemande(true);
        $this->assertEquals(true, $obj->getArDemande());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AlertesEnCours();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollabDst() method.
     *
     * @return void
     */
    public function testSetCodeCollabDst() {

        $obj = new AlertesEnCours();

        $obj->setCodeCollabDst("codeCollabDst");
        $this->assertEquals("codeCollabDst", $obj->getCodeCollabDst());
    }

    /**
     * Tests the setCodeCollabOrg() method.
     *
     * @return void
     */
    public function testSetCodeCollabOrg() {

        $obj = new AlertesEnCours();

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

        $obj = new AlertesEnCours();

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

        $obj = new AlertesEnCours();

        $obj->setDateDeclenchement($dateDeclenchement);
        $this->assertSame($dateDeclenchement, $obj->getDateDeclenchement());
    }

    /**
     * Tests the setIdAlerte() method.
     *
     * @return void
     */
    public function testSetIdAlerte() {

        $obj = new AlertesEnCours();

        $obj->setIdAlerte(10);
        $this->assertEquals(10, $obj->getIdAlerte());
    }

    /**
     * Tests the setTexteAlerte() method.
     *
     * @return void
     */
    public function testSetTexteAlerte() {

        $obj = new AlertesEnCours();

        $obj->setTexteAlerte("texteAlerte");
        $this->assertEquals("texteAlerte", $obj->getTexteAlerte());
    }
}
