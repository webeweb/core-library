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

use WBW\Library\Quadratus\Model\QGI\CollabVisuAppels;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Collab visu appels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CollabVisuAppelsTest extends AbstractTestCase {

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new CollabVisuAppels();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setCodeCollabVisu()
     *
     * @return void
     */
    public function testSetCodeCollabVisu(): void {

        $obj = new CollabVisuAppels();

        $obj->setCodeCollabVisu("codeCollabVisu");
        $this->assertEquals("codeCollabVisu", $obj->getCodeCollabVisu());
    }

    /**
     * Tests setTypeCode()
     *
     * @return void
     */
    public function testSetTypeCode(): void {

        $obj = new CollabVisuAppels();

        $obj->setTypeCode("typeCode");
        $this->assertEquals("typeCode", $obj->getTypeCode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CollabVisuAppels();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeCollabVisu());
        $this->assertNull($obj->getTypeCode());
    }
}
