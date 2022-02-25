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

use WBW\Library\Quadratus\Model\QGI\ClientsSelectionSuite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients selection suite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsSelectionSuiteTest extends AbstractTestCase {

    /**
     * Tests setCocheClient()
     *
     * @return void
     */
    public function testSetCocheClient(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheClient(true);
        $this->assertEquals(true, $obj->getCocheClient());
    }

    /**
     * Tests setCocheFournisseur()
     *
     * @return void
     */
    public function testSetCocheFournisseur(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheFournisseur(true);
        $this->assertEquals(true, $obj->getCocheFournisseur());
    }

    /**
     * Tests setCocheIntervenant()
     *
     * @return void
     */
    public function testSetCocheIntervenant(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheIntervenant(true);
        $this->assertEquals(true, $obj->getCocheIntervenant());
    }

    /**
     * Tests setCocheProspect()
     *
     * @return void
     */
    public function testSetCocheProspect(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheProspect(true);
        $this->assertEquals(true, $obj->getCocheProspect());
    }

    /**
     * Tests setCocheSorti()
     *
     * @return void
     */
    public function testSetCocheSorti(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setCocheSorti(true);
        $this->assertEquals(true, $obj->getCocheSorti());
    }

    /**
     * Tests setCodeCol()
     *
     * @return void
     */
    public function testSetCodeCol(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setCodeCol("codeCol");
        $this->assertEquals("codeCol", $obj->getCodeCol());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ClientsSelectionSuite();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsSelectionSuite();

        $this->assertNull($obj->getCocheClient());
        $this->assertNull($obj->getCocheFournisseur());
        $this->assertNull($obj->getCocheIntervenant());
        $this->assertNull($obj->getCocheProspect());
        $this->assertNull($obj->getCocheSorti());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
    }
}
