<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\ChantiersSynchroId;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers synchro id test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersSynchroIdTest extends AbstractTestCase {

    /**
     * Test setBlocDa()
     *
     * @return void
     */
    public function testSetBlocDa(): void {

        $obj = new ChantiersSynchroId();

        $obj->setBlocDa(true);
        $this->assertTrue($obj->getBlocDa());
    }

    /**
     * Test setBlocFc()
     *
     * @return void
     */
    public function testSetBlocFc(): void {

        $obj = new ChantiersSynchroId();

        $obj->setBlocFc(true);
        $this->assertTrue($obj->getBlocFc());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersSynchroId();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersSynchroId();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersSynchroId();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new ChantiersSynchroId();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersSynchroId();

        $this->assertNull($obj->getBlocDa());
        $this->assertNull($obj->getBlocFc());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getUniqId());
    }
}
