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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegroupementDS;

/**
 * Regroupement d s model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementDSTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegroupementDS();

        $this->assertNull($obj->getCodeRds());
        $this->assertNull($obj->getCodeRupture());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getOrganisme());
    }

    /**
     * Tests the setCodeRds() method.
     *
     * @return void
     */
    public function testSetCodeRds() {

        $obj = new RegroupementDS();

        $obj->setCodeRds("codeRds");
        $this->assertEquals("codeRds", $obj->getCodeRds());
    }

    /**
     * Tests the setCodeRupture() method.
     *
     * @return void
     */
    public function testSetCodeRupture() {

        $obj = new RegroupementDS();

        $obj->setCodeRupture("codeRupture");
        $this->assertEquals("codeRupture", $obj->getCodeRupture());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new RegroupementDS();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new RegroupementDS();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }
}
