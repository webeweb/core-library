<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\EnchainementSemaines;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Enchainement semaines test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class EnchainementSemainesTest extends AbstractTestCase {

    /**
     * Tests setDiscrSem()
     *
     * @return void
     */
    public function testSetDiscrSem(): void {

        $obj = new EnchainementSemaines();

        $obj->setDiscrSem(10);
        $this->assertEquals(10, $obj->getDiscrSem());
    }

    /**
     * Tests setNumOrdre()
     *
     * @return void
     */
    public function testSetNumOrdre(): void {

        $obj = new EnchainementSemaines();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EnchainementSemaines();

        $this->assertNull($obj->getDiscrSem());
        $this->assertNull($obj->getNumOrdre());
    }
}
