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

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\TmpTable1;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tmp table1 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TmpTable1Test extends AbstractTestCase {

    /**
     * Test setClasse()
     *
     * @return void
     */
    public function testSetClasse(): void {

        $obj = new TmpTable1();

        $obj->setClasse("classe");
        $this->assertEquals("classe", $obj->getClasse());
    }

    /**
     * Test setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new TmpTable1();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Test setEtablissement()
     *
     * @return void
     */
    public function testSetEtablissement(): void {

        $obj = new TmpTable1();

        $obj->setEtablissement(10);
        $this->assertEquals(10, $obj->getEtablissement());
    }

    /**
     * Test setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new TmpTable1();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Test setInverse()
     *
     * @return void
     */
    public function testSetInverse(): void {

        $obj = new TmpTable1();

        $obj->setInverse(true);
        $this->assertTrue($obj->getInverse());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new TmpTable1();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setQui()
     *
     * @return void
     */
    public function testSetQui(): void {

        $obj = new TmpTable1();

        $obj->setQui(10);
        $this->assertEquals(10, $obj->getQui());
    }

    /**
     * Test setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new TmpTable1();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TmpTable1();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Test setValeur()
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new TmpTable1();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }

    /**
     * Test setValeurTot()
     *
     * @return void
     */
    public function testSetValeurTot(): void {

        $obj = new TmpTable1();

        $obj->setValeurTot(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurTot());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TmpTable1();

        $this->assertNull($obj->getClasse());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getEtablissement());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInverse());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getQui());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurTot());
    }
}
