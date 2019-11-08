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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelectionSuite;

/**
 * Clients selection suite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelectionSuiteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsSelectionSuite();

        $this->assertNull($obj->getCocheClient());
        $this->assertNull($obj->getCocheFournisseur());
        $this->assertNull($obj->getCocheIntervenant());
        $this->assertNull($obj->getCocheProspect());
        $this->assertNull($obj->getCocheSorti());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
    }

    /**
     * Tests the setCocheClient() method.
     *
     * @return void
     */
    public function testSetCocheClient() {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheClient(true);
        $this->assertEquals(true, $obj->getCocheClient());
    }

    /**
     * Tests the setCocheFournisseur() method.
     *
     * @return void
     */
    public function testSetCocheFournisseur() {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheFournisseur(true);
        $this->assertEquals(true, $obj->getCocheFournisseur());
    }

    /**
     * Tests the setCocheIntervenant() method.
     *
     * @return void
     */
    public function testSetCocheIntervenant() {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheIntervenant(true);
        $this->assertEquals(true, $obj->getCocheIntervenant());
    }

    /**
     * Tests the setCocheProspect() method.
     *
     * @return void
     */
    public function testSetCocheProspect() {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheProspect(true);
        $this->assertEquals(true, $obj->getCocheProspect());
    }

    /**
     * Tests the setCocheSorti() method.
     *
     * @return void
     */
    public function testSetCocheSorti() {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheSorti(true);
        $this->assertEquals(true, $obj->getCocheSorti());
    }

    /**
     * Tests the setCodeCol() method.
     *
     * @return void
     */
    public function testSetCodeCol() {

        $obj = new ClientsSelectionSuite();

        $obj->setCodeCol("codeCol");
        $this->assertEquals("codeCol", $obj->getCodeCol());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ClientsSelectionSuite();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }
}
