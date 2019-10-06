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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ConstPrimes;

/**
 * Const primes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ConstPrimesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstPrimes();

        $this->assertNull($obj->getCodePrimeQPaie());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
    }

    /**
     * Tests the setCodePrimeQPaie() method.
     *
     * @return void
     */
    public function testSetCodePrimeQPaie() {

        $obj = new ConstPrimes();

        $obj->setCodePrimeQPaie("codePrimeQPaie");
        $this->assertEquals("codePrimeQPaie", $obj->getCodePrimeQPaie());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new ConstPrimes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ConstPrimes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }
}
