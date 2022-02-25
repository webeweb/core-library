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

use WBW\Library\Quadratus\Model\QGI\Contenu;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Contenu test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ContenuTest extends AbstractTestCase {

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new Contenu();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests setTexteContenu()
     *
     * @return void
     */
    public function testSetTexteContenu(): void {

        $obj = new Contenu();

        $obj->setTexteContenu("texteContenu");
        $this->assertEquals("texteContenu", $obj->getTexteContenu());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Contenu();

        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getTexteContenu());
    }
}
