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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelAvance;

/**
 * Clients sel avance model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelAvanceTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsSelAvance();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNomReq1());
        $this->assertNull($obj->getNomReq10());
        $this->assertNull($obj->getNomReq11());
        $this->assertNull($obj->getNomReq12());
        $this->assertNull($obj->getNomReq2());
        $this->assertNull($obj->getNomReq3());
        $this->assertNull($obj->getNomReq4());
        $this->assertNull($obj->getNomReq5());
        $this->assertNull($obj->getNomReq6());
        $this->assertNull($obj->getNomReq7());
        $this->assertNull($obj->getNomReq8());
        $this->assertNull($obj->getNomReq9());
        $this->assertNull($obj->getRequete1());
        $this->assertNull($obj->getRequete10());
        $this->assertNull($obj->getRequete11());
        $this->assertNull($obj->getRequete12());
        $this->assertNull($obj->getRequete2());
        $this->assertNull($obj->getRequete3());
        $this->assertNull($obj->getRequete4());
        $this->assertNull($obj->getRequete5());
        $this->assertNull($obj->getRequete6());
        $this->assertNull($obj->getRequete7());
        $this->assertNull($obj->getRequete8());
        $this->assertNull($obj->getRequete9());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new ClientsSelAvance();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCol() method.
     *
     * @return void
     */
    public function testSetCodeCol() {

        $obj = new ClientsSelAvance();

        $obj->setCodeCol("codeCol");
        $this->assertEquals("codeCol", $obj->getCodeCol());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ClientsSelAvance();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNomReq1() method.
     *
     * @return void
     */
    public function testSetNomReq1() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq1("nomReq1");
        $this->assertEquals("nomReq1", $obj->getNomReq1());
    }

    /**
     * Tests the setNomReq10() method.
     *
     * @return void
     */
    public function testSetNomReq10() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq10("nomReq10");
        $this->assertEquals("nomReq10", $obj->getNomReq10());
    }

    /**
     * Tests the setNomReq11() method.
     *
     * @return void
     */
    public function testSetNomReq11() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq11("nomReq11");
        $this->assertEquals("nomReq11", $obj->getNomReq11());
    }

    /**
     * Tests the setNomReq12() method.
     *
     * @return void
     */
    public function testSetNomReq12() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq12("nomReq12");
        $this->assertEquals("nomReq12", $obj->getNomReq12());
    }

    /**
     * Tests the setNomReq2() method.
     *
     * @return void
     */
    public function testSetNomReq2() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq2("nomReq2");
        $this->assertEquals("nomReq2", $obj->getNomReq2());
    }

    /**
     * Tests the setNomReq3() method.
     *
     * @return void
     */
    public function testSetNomReq3() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq3("nomReq3");
        $this->assertEquals("nomReq3", $obj->getNomReq3());
    }

    /**
     * Tests the setNomReq4() method.
     *
     * @return void
     */
    public function testSetNomReq4() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq4("nomReq4");
        $this->assertEquals("nomReq4", $obj->getNomReq4());
    }

    /**
     * Tests the setNomReq5() method.
     *
     * @return void
     */
    public function testSetNomReq5() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq5("nomReq5");
        $this->assertEquals("nomReq5", $obj->getNomReq5());
    }

    /**
     * Tests the setNomReq6() method.
     *
     * @return void
     */
    public function testSetNomReq6() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq6("nomReq6");
        $this->assertEquals("nomReq6", $obj->getNomReq6());
    }

    /**
     * Tests the setNomReq7() method.
     *
     * @return void
     */
    public function testSetNomReq7() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq7("nomReq7");
        $this->assertEquals("nomReq7", $obj->getNomReq7());
    }

    /**
     * Tests the setNomReq8() method.
     *
     * @return void
     */
    public function testSetNomReq8() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq8("nomReq8");
        $this->assertEquals("nomReq8", $obj->getNomReq8());
    }

    /**
     * Tests the setNomReq9() method.
     *
     * @return void
     */
    public function testSetNomReq9() {

        $obj = new ClientsSelAvance();

        $obj->setNomReq9("nomReq9");
        $this->assertEquals("nomReq9", $obj->getNomReq9());
    }

    /**
     * Tests the setRequete1() method.
     *
     * @return void
     */
    public function testSetRequete1() {

        $obj = new ClientsSelAvance();

        $obj->setRequete1("requete1");
        $this->assertEquals("requete1", $obj->getRequete1());
    }

    /**
     * Tests the setRequete10() method.
     *
     * @return void
     */
    public function testSetRequete10() {

        $obj = new ClientsSelAvance();

        $obj->setRequete10("requete10");
        $this->assertEquals("requete10", $obj->getRequete10());
    }

    /**
     * Tests the setRequete11() method.
     *
     * @return void
     */
    public function testSetRequete11() {

        $obj = new ClientsSelAvance();

        $obj->setRequete11("requete11");
        $this->assertEquals("requete11", $obj->getRequete11());
    }

    /**
     * Tests the setRequete12() method.
     *
     * @return void
     */
    public function testSetRequete12() {

        $obj = new ClientsSelAvance();

        $obj->setRequete12("requete12");
        $this->assertEquals("requete12", $obj->getRequete12());
    }

    /**
     * Tests the setRequete2() method.
     *
     * @return void
     */
    public function testSetRequete2() {

        $obj = new ClientsSelAvance();

        $obj->setRequete2("requete2");
        $this->assertEquals("requete2", $obj->getRequete2());
    }

    /**
     * Tests the setRequete3() method.
     *
     * @return void
     */
    public function testSetRequete3() {

        $obj = new ClientsSelAvance();

        $obj->setRequete3("requete3");
        $this->assertEquals("requete3", $obj->getRequete3());
    }

    /**
     * Tests the setRequete4() method.
     *
     * @return void
     */
    public function testSetRequete4() {

        $obj = new ClientsSelAvance();

        $obj->setRequete4("requete4");
        $this->assertEquals("requete4", $obj->getRequete4());
    }

    /**
     * Tests the setRequete5() method.
     *
     * @return void
     */
    public function testSetRequete5() {

        $obj = new ClientsSelAvance();

        $obj->setRequete5("requete5");
        $this->assertEquals("requete5", $obj->getRequete5());
    }

    /**
     * Tests the setRequete6() method.
     *
     * @return void
     */
    public function testSetRequete6() {

        $obj = new ClientsSelAvance();

        $obj->setRequete6("requete6");
        $this->assertEquals("requete6", $obj->getRequete6());
    }

    /**
     * Tests the setRequete7() method.
     *
     * @return void
     */
    public function testSetRequete7() {

        $obj = new ClientsSelAvance();

        $obj->setRequete7("requete7");
        $this->assertEquals("requete7", $obj->getRequete7());
    }

    /**
     * Tests the setRequete8() method.
     *
     * @return void
     */
    public function testSetRequete8() {

        $obj = new ClientsSelAvance();

        $obj->setRequete8("requete8");
        $this->assertEquals("requete8", $obj->getRequete8());
    }

    /**
     * Tests the setRequete9() method.
     *
     * @return void
     */
    public function testSetRequete9() {

        $obj = new ClientsSelAvance();

        $obj->setRequete9("requete9");
        $this->assertEquals("requete9", $obj->getRequete9());
    }
}
