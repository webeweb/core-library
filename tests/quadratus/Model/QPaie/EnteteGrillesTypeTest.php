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

use WBW\Library\Quadratus\Model\QPaie\EnteteGrillesType;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Entete grilles type test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EnteteGrillesTypeTest extends AbstractTestCase {

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new EnteteGrillesType();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new EnteteGrillesType();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EnteteGrillesType();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumeroGrilleType());
    }
}
