<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\EnchainementSemaines;

/**
 * Enchainement semaines test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EnchainementSemainesTest extends AbstractTestCase {

    /**
     * Tests the setDiscrSem() method.
     *
     * @return void
     */
    public function testSetDiscrSem() {

        $obj = new EnchainementSemaines();

        $obj->setDiscrSem(10);
        $this->assertEquals(10, $obj->getDiscrSem());
    }

    /**
     * Tests the setNumOrdre() method.
     *
     * @return void
     */
    public function testSetNumOrdre() {

        $obj = new EnchainementSemaines();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EnchainementSemaines();

        $this->assertNull($obj->getDiscrSem());
        $this->assertNull($obj->getNumOrdre());
    }
}
