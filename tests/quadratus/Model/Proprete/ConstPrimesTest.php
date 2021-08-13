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

use WBW\Library\Quadratus\Model\Proprete\ConstPrimes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Const primes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstPrimesTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeQPaie() method.
     *
     * @return void
     */
    public function testSetCodePrimeQPaie(): void {

        $obj = new ConstPrimes();

        $obj->setCodePrimeQPaie("codePrimeQPaie");
        $this->assertEquals("codePrimeQPaie", $obj->getCodePrimeQPaie());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new ConstPrimes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ConstPrimes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstPrimes();

        $this->assertNull($obj->getCodePrimeQPaie());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
    }
}
