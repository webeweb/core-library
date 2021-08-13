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

use WBW\Library\Quadratus\Model\QCompta\TransfertImmos;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Transfert immos test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class TransfertImmosTest extends AbstractTestCase {

    /**
     * Tests the setCptDerCap() method.
     *
     * @return void
     */
    public function testSetCptDerCap(): void {

        $obj = new TransfertImmos();

        $obj->setCptDerCap("cptDerCap");
        $this->assertEquals("cptDerCap", $obj->getCptDerCap());
    }

    /**
     * Tests the setCptDerDot() method.
     *
     * @return void
     */
    public function testSetCptDerDot(): void {

        $obj = new TransfertImmos();

        $obj->setCptDerDot("cptDerDot");
        $this->assertEquals("cptDerDot", $obj->getCptDerDot());
    }

    /**
     * Tests the setCptDerMaj() method.
     *
     * @return void
     */
    public function testSetCptDerMaj(): void {

        $obj = new TransfertImmos();

        $obj->setCptDerMaj("cptDerMaj");
        $this->assertEquals("cptDerMaj", $obj->getCptDerMaj());
    }

    /**
     * Tests the setCptDerRep() method.
     *
     * @return void
     */
    public function testSetCptDerRep(): void {

        $obj = new TransfertImmos();

        $obj->setCptDerRep("cptDerRep");
        $this->assertEquals("cptDerRep", $obj->getCptDerRep());
    }

    /**
     * Tests the setCptDotCor() method.
     *
     * @return void
     */
    public function testSetCptDotCor(): void {

        $obj = new TransfertImmos();

        $obj->setCptDotCor("cptDotCor");
        $this->assertEquals("cptDotCor", $obj->getCptDotCor());
    }

    /**
     * Tests the setCptDotExc() method.
     *
     * @return void
     */
    public function testSetCptDotExc(): void {

        $obj = new TransfertImmos();

        $obj->setCptDotExc("cptDotExc");
        $this->assertEquals("cptDotExc", $obj->getCptDotExc());
    }

    /**
     * Tests the setCptDotFin() method.
     *
     * @return void
     */
    public function testSetCptDotFin(): void {

        $obj = new TransfertImmos();

        $obj->setCptDotFin("cptDotFin");
        $this->assertEquals("cptDotFin", $obj->getCptDotFin());
    }

    /**
     * Tests the setCptDotInc() method.
     *
     * @return void
     */
    public function testSetCptDotInc(): void {

        $obj = new TransfertImmos();

        $obj->setCptDotInc("cptDotInc");
        $this->assertEquals("cptDotInc", $obj->getCptDotInc());
    }

    /**
     * Tests the setCptValCor() method.
     *
     * @return void
     */
    public function testSetCptValCor(): void {

        $obj = new TransfertImmos();

        $obj->setCptValCor("cptValCor");
        $this->assertEquals("cptValCor", $obj->getCptValCor());
    }

    /**
     * Tests the setCptValExc() method.
     *
     * @return void
     */
    public function testSetCptValExc(): void {

        $obj = new TransfertImmos();

        $obj->setCptValExc("cptValExc");
        $this->assertEquals("cptValExc", $obj->getCptValExc());
    }

    /**
     * Tests the setCptValFin() method.
     *
     * @return void
     */
    public function testSetCptValFin(): void {

        $obj = new TransfertImmos();

        $obj->setCptValFin("cptValFin");
        $this->assertEquals("cptValFin", $obj->getCptValFin());
    }

    /**
     * Tests the setCptValInc() method.
     *
     * @return void
     */
    public function testSetCptValInc(): void {

        $obj = new TransfertImmos();

        $obj->setCptValInc("cptValInc");
        $this->assertEquals("cptValInc", $obj->getCptValInc());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TransfertImmos();

        $this->assertNull($obj->getCptDerCap());
        $this->assertNull($obj->getCptDerDot());
        $this->assertNull($obj->getCptDerMaj());
        $this->assertNull($obj->getCptDerRep());
        $this->assertNull($obj->getCptDotCor());
        $this->assertNull($obj->getCptDotExc());
        $this->assertNull($obj->getCptDotFin());
        $this->assertNull($obj->getCptDotInc());
        $this->assertNull($obj->getCptValCor());
        $this->assertNull($obj->getCptValExc());
        $this->assertNull($obj->getCptValFin());
        $this->assertNull($obj->getCptValInc());
    }
}
