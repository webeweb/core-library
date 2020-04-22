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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Reglements;

/**
 * Reglements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ReglementsTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Reglements();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Reglements();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntitule2() method.
     *
     * @return void
     */
    public function testSetIntitule2() {

        $obj = new Reglements();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Tests the setIntitule3() method.
     *
     * @return void
     */
    public function testSetIntitule3() {

        $obj = new Reglements();

        $obj->setIntitule3("intitule3");
        $this->assertEquals("intitule3", $obj->getIntitule3());
    }

    /**
     * Tests the setTypeAcceptation() method.
     *
     * @return void
     */
    public function testSetTypeAcceptation() {

        $obj = new Reglements();

        $obj->setTypeAcceptation("typeAcceptation");
        $this->assertEquals("typeAcceptation", $obj->getTypeAcceptation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Reglements();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getIntitule3());
        $this->assertNull($obj->getTypeAcceptation());
    }
}
