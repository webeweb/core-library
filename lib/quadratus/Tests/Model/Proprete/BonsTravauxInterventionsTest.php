<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\BonsTravauxInterventions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bons travaux interventions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class BonsTravauxInterventionsTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setDimanche()
     *
     * @return void
     */
    public function testSetDimanche(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setDimanche(true);
        $this->assertTrue($obj->getDimanche());
    }

    /**
     * Test setJeudi()
     *
     * @return void
     */
    public function testSetJeudi(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setJeudi(true);
        $this->assertTrue($obj->getJeudi());
    }

    /**
     * Test setLundi()
     *
     * @return void
     */
    public function testSetLundi(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setLundi(true);
        $this->assertTrue($obj->getLundi());
    }

    /**
     * Test setMardi()
     *
     * @return void
     */
    public function testSetMardi(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setMardi(true);
        $this->assertTrue($obj->getMardi());
    }

    /**
     * Test setMercredi()
     *
     * @return void
     */
    public function testSetMercredi(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setMercredi(true);
        $this->assertTrue($obj->getMercredi());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setNumSem()
     *
     * @return void
     */
    public function testSetNumSem(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setNumSem("numSem");
        $this->assertEquals("numSem", $obj->getNumSem());
    }

    /**
     * Test setSamedi()
     *
     * @return void
     */
    public function testSetSamedi(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setSamedi(true);
        $this->assertTrue($obj->getSamedi());
    }

    /**
     * Test setVendredi()
     *
     * @return void
     */
    public function testSetVendredi(): void {

        $obj = new BonsTravauxInterventions();

        $obj->setVendredi(true);
        $this->assertTrue($obj->getVendredi());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BonsTravauxInterventions();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDimanche());
        $this->assertNull($obj->getJeudi());
        $this->assertNull($obj->getLundi());
        $this->assertNull($obj->getMardi());
        $this->assertNull($obj->getMercredi());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumSem());
        $this->assertNull($obj->getSamedi());
        $this->assertNull($obj->getVendredi());
    }
}
