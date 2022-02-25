<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\CollabTache;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Collab tache test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CollabTacheTest extends AbstractTestCase {

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new CollabTache();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new CollabTache();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setPv1()
     *
     * @return void
     */
    public function testSetPv1(): void {

        $obj = new CollabTache();

        $obj->setPv1(10.092018);
        $this->assertEquals(10.092018, $obj->getPv1());
    }

    /**
     * Tests setPv2()
     *
     * @return void
     */
    public function testSetPv2(): void {

        $obj = new CollabTache();

        $obj->setPv2(10.092018);
        $this->assertEquals(10.092018, $obj->getPv2());
    }

    /**
     * Tests setPv3()
     *
     * @return void
     */
    public function testSetPv3(): void {

        $obj = new CollabTache();

        $obj->setPv3(10.092018);
        $this->assertEquals(10.092018, $obj->getPv3());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CollabTache();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getPv1());
        $this->assertNull($obj->getPv2());
        $this->assertNull($obj->getPv3());
    }
}
