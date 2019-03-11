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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCo_Constantes;

/**
 * Actions co_ constantes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCo_ConstantesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCo_Constantes();

        $this->assertNull($obj->getLieuEdition());
        $this->assertNull($obj->getNumDeclaration());
    }

    /**
     * Tests the setLieuEdition() method.
     *
     * @return void
     */
    public function testSetLieuEdition() {

        $obj = new ActionsCo_Constantes();

        $obj->setLieuEdition("lieuEdition");
        $this->assertEquals("lieuEdition", $obj->getLieuEdition());
    }

    /**
     * Tests the setNumDeclaration() method.
     *
     * @return void
     */
    public function testSetNumDeclaration() {

        $obj = new ActionsCo_Constantes();

        $obj->setNumDeclaration("numDeclaration");
        $this->assertEquals("numDeclaration", $obj->getNumDeclaration());
    }
}
