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

use WBW\Library\Quadratus\Model\QGI\ConventionsColConf;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Conventions col conf test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ConventionsColConfTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ConventionsColConf();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setDroit()
     *
     * @return void
     */
    public function testSetDroit(): void {

        $obj = new ConventionsColConf();

        $obj->setDroit("droit");
        $this->assertEquals("droit", $obj->getDroit());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ConventionsColConf();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionsColConf();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDroit());
        $this->assertNull($obj->getType());
    }
}
