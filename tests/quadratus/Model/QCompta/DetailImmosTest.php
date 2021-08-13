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

use WBW\Library\Quadratus\Model\QCompta\DetailImmos;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Detail immos test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DetailImmosTest extends AbstractTestCase {

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new DetailImmos();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DetailImmos();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new DetailImmos();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new DetailImmos();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeux() method.
     *
     * @return void
     */
    public function testSetNumeroDeux(): void {

        $obj = new DetailImmos();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new DetailImmos();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new DetailImmos();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailImmos();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getValeur());
    }
}
