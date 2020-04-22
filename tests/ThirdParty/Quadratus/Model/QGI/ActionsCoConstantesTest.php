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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoConstantes;

/**
 * Actions co constantes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoConstantesTest extends AbstractTestCase {

    /**
     * Tests the setLieuEdition() method.
     *
     * @return void
     */
    public function testSetLieuEdition() {

        $obj = new ActionsCoConstantes();

        $obj->setLieuEdition("lieuEdition");
        $this->assertEquals("lieuEdition", $obj->getLieuEdition());
    }

    /**
     * Tests the setNumDeclaration() method.
     *
     * @return void
     */
    public function testSetNumDeclaration() {

        $obj = new ActionsCoConstantes();

        $obj->setNumDeclaration("numDeclaration");
        $this->assertEquals("numDeclaration", $obj->getNumDeclaration());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ActionsCoConstantes();

        $this->assertNull($obj->getLieuEdition());
        $this->assertNull($obj->getNumDeclaration());
    }
}
