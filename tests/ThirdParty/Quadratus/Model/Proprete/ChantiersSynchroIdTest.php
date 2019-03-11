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

use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersSynchroId;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers synchro id model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersSynchroIdTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChantiersSynchroId();

        $this->assertNull($obj->getBlocDA());
        $this->assertNull($obj->getBlocFC());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setBlocDA() method.
     *
     * @return void
     */
    public function testSetBlocDA() {

        $obj = new ChantiersSynchroId();

        $obj->setBlocDA(true);
        $this->assertEquals(true, $obj->getBlocDA());
    }

    /**
     * Tests the setBlocFC() method.
     *
     * @return void
     */
    public function testSetBlocFC() {

        $obj = new ChantiersSynchroId();

        $obj->setBlocFC(true);
        $this->assertEquals(true, $obj->getBlocFC());
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
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new ChantiersSynchroId();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }
}
