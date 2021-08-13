<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\RegroupementDs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regroupement ds test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RegroupementDsTest extends AbstractTestCase {

    /**
     * Tests the setCodeRds() method.
     *
     * @return void
     */
    public function testSetCodeRds(): void {

        $obj = new RegroupementDs();

        $obj->setCodeRds("codeRds");
        $this->assertEquals("codeRds", $obj->getCodeRds());
    }

    /**
     * Tests the setCodeRupture() method.
     *
     * @return void
     */
    public function testSetCodeRupture(): void {

        $obj = new RegroupementDs();

        $obj->setCodeRupture("codeRupture");
        $this->assertEquals("codeRupture", $obj->getCodeRupture());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new RegroupementDs();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new RegroupementDs();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegroupementDs();

        $this->assertNull($obj->getCodeRds());
        $this->assertNull($obj->getCodeRupture());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getOrganisme());
    }
}
