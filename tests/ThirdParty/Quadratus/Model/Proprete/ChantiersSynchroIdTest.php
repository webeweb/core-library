<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersSynchroId;

/**
 * Chantiers synchro id test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersSynchroIdTest extends AbstractTestCase {

    /**
     * Tests the setBlocDa() method.
     *
     * @return void
     */
    public function testSetBlocDa() {

        $obj = new ChantiersSynchroId();

        $obj->setBlocDa(true);
        $this->assertEquals(true, $obj->getBlocDa());
    }

    /**
     * Tests the setBlocFc() method.
     *
     * @return void
     */
    public function testSetBlocFc() {

        $obj = new ChantiersSynchroId();

        $obj->setBlocFc(true);
        $this->assertEquals(true, $obj->getBlocFc());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new ChantiersSynchroId();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new ChantiersSynchroId();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ChantiersSynchroId();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new ChantiersSynchroId();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ChantiersSynchroId();

        $this->assertNull($obj->getBlocDa());
        $this->assertNull($obj->getBlocFc());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getUniqId());
    }
}
