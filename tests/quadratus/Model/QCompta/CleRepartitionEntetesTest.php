<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\CleRepartitionEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cle repartition entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CleRepartitionEntetesTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new CleRepartitionEntetes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CleRepartitionEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setTotal()
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new CleRepartitionEntetes();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Tests setTypeCle()
     *
     * @return void
     */
    public function testSetTypeCle(): void {

        $obj = new CleRepartitionEntetes();

        $obj->setTypeCle("typeCle");
        $this->assertEquals("typeCle", $obj->getTypeCle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CleRepartitionEntetes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTypeCle());
    }
}
