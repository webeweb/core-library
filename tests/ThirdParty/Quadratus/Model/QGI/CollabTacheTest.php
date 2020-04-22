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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CollabTache;

/**
 * Collab tache test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CollabTacheTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new CollabTache();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new CollabTache();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setPv1() method.
     *
     * @return void
     */
    public function testSetPv1() {

        $obj = new CollabTache();

        $obj->setPv1(10.092018);
        $this->assertEquals(10.092018, $obj->getPv1());
    }

    /**
     * Tests the setPv2() method.
     *
     * @return void
     */
    public function testSetPv2() {

        $obj = new CollabTache();

        $obj->setPv2(10.092018);
        $this->assertEquals(10.092018, $obj->getPv2());
    }

    /**
     * Tests the setPv3() method.
     *
     * @return void
     */
    public function testSetPv3() {

        $obj = new CollabTache();

        $obj->setPv3(10.092018);
        $this->assertEquals(10.092018, $obj->getPv3());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CollabTache();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getPv1());
        $this->assertNull($obj->getPv2());
        $this->assertNull($obj->getPv3());
    }
}
