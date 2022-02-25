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

use WBW\Library\Quadratus\Model\QGI\eWsEspace;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * e ws espace test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class eWsEspaceTest extends AbstractTestCase {

    /**
     * Tests setNumDoss()
     *
     * @return void
     */
    public function testSetNumDoss(): void {

        $obj = new eWsEspace();

        $obj->setNumDoss("numDoss");
        $this->assertEquals("numDoss", $obj->getNumDoss());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new eWsEspace();

        $this->assertNull($obj->getNumDoss());
    }
}
