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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\eWsEspace;

/**
 * e ws espace test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class eWsEspaceTest extends AbstractTestCase {

    /**
     * Tests the setNumDoss() method.
     *
     * @return void
     */
    public function testSetNumDoss() {

        $obj = new eWsEspace();

        $obj->setNumDoss("numDoss");
        $this->assertEquals("numDoss", $obj->getNumDoss());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new eWsEspace();

        $this->assertNull($obj->getNumDoss());
    }
}
