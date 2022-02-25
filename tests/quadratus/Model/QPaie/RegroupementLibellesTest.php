<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\RegroupementLibelles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regroupement libelles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RegroupementLibellesTest extends AbstractTestCase {

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new RegroupementLibelles();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setNumRegroupement()
     *
     * @return void
     */
    public function testSetNumRegroupement(): void {

        $obj = new RegroupementLibelles();

        $obj->setNumRegroupement(10);
        $this->assertEquals(10, $obj->getNumRegroupement());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegroupementLibelles();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getNumRegroupement());
    }
}
