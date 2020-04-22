<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Trames;

/**
 * Trames test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class TramesTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Trames();

        $obj->setCode(10);
        $this->assertEquals(10, $obj->getCode());
    }

    /**
     * Tests the setGardeMontants() method.
     *
     * @return void
     */
    public function testSetGardeMontants() {

        $obj = new Trames();

        $obj->setGardeMontants(true);
        $this->assertEquals(true, $obj->getGardeMontants());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Trames();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Trames();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getGardeMontants());
        $this->assertNull($obj->getLibelle());
    }
}
