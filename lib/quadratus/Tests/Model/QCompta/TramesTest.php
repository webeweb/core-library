<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\Trames;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Trames test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class TramesTest extends AbstractTestCase {

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Trames();

        $obj->setCode(10);
        $this->assertEquals(10, $obj->getCode());
    }

    /**
     * Test setGardeMontants()
     *
     * @return void
     */
    public function testSetGardeMontants(): void {

        $obj = new Trames();

        $obj->setGardeMontants(true);
        $this->assertTrue($obj->getGardeMontants());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Trames();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Trames();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getGardeMontants());
        $this->assertNull($obj->getLibelle());
    }
}
