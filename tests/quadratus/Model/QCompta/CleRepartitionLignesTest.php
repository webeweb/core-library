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

use WBW\Library\Quadratus\Model\QCompta\CleRepartitionLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cle repartition lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CleRepartitionLignesTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new CleRepartitionLignes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new CleRepartitionLignes();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new CleRepartitionLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setValeur()
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new CleRepartitionLignes();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CleRepartitionLignes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getValeur());
    }
}
