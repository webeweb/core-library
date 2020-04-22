<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EnteteGrillesType;

/**
 * Entete grilles type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EnteteGrillesTypeTest extends AbstractTestCase {

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new EnteteGrillesType();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType() {

        $obj = new EnteteGrillesType();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EnteteGrillesType();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumeroGrilleType());
    }
}
