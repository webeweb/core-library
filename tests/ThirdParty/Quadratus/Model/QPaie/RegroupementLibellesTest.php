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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegroupementLibelles;

/**
 * Regroupement libelles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementLibellesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegroupementLibelles();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getNumRegroupement());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new RegroupementLibelles();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setNumRegroupement() method.
     *
     * @return void
     */
    public function testSetNumRegroupement() {

        $obj = new RegroupementLibelles();

        $obj->setNumRegroupement(10);
        $this->assertEquals(10, $obj->getNumRegroupement());
    }
}
