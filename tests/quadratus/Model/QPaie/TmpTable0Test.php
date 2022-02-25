<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\TmpTable0;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tmp table0 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TmpTable0Test extends AbstractTestCase {

    /**
     * Tests setBase()
     *
     * @return void
     */
    public function testSetBase(): void {

        $obj = new TmpTable0();

        $obj->setBase(10.092018);
        $this->assertEquals(10.092018, $obj->getBase());
    }

    /**
     * Tests setBaseTot()
     *
     * @return void
     */
    public function testSetBaseTot(): void {

        $obj = new TmpTable0();

        $obj->setBaseTot(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTot());
    }

    /**
     * Tests setChargePat()
     *
     * @return void
     */
    public function testSetChargePat(): void {

        $obj = new TmpTable0();

        $obj->setChargePat(10.092018);
        $this->assertEquals(10.092018, $obj->getChargePat());
    }

    /**
     * Tests setChargePatTot()
     *
     * @return void
     */
    public function testSetChargePatTot(): void {

        $obj = new TmpTable0();

        $obj->setChargePatTot(10.092018);
        $this->assertEquals(10.092018, $obj->getChargePatTot());
    }

    /**
     * Tests setChargeSal()
     *
     * @return void
     */
    public function testSetChargeSal(): void {

        $obj = new TmpTable0();

        $obj->setChargeSal(10.092018);
        $this->assertEquals(10.092018, $obj->getChargeSal());
    }

    /**
     * Tests setChargeSalTot()
     *
     * @return void
     */
    public function testSetChargeSalTot(): void {

        $obj = new TmpTable0();

        $obj->setChargeSalTot(10.092018);
        $this->assertEquals(10.092018, $obj->getChargeSalTot());
    }

    /**
     * Tests setClasse()
     *
     * @return void
     */
    public function testSetClasse(): void {

        $obj = new TmpTable0();

        $obj->setClasse("classe");
        $this->assertEquals("classe", $obj->getClasse());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TmpTable0();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new TmpTable0();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setEtablissement()
     *
     * @return void
     */
    public function testSetEtablissement(): void {

        $obj = new TmpTable0();

        $obj->setEtablissement(10);
        $this->assertEquals(10, $obj->getEtablissement());
    }

    /**
     * Tests setImputation()
     *
     * @return void
     */
    public function testSetImputation(): void {

        $obj = new TmpTable0();

        $obj->setImputation(true);
        $this->assertEquals(true, $obj->getImputation());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new TmpTable0();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setInverse()
     *
     * @return void
     */
    public function testSetInverse(): void {

        $obj = new TmpTable0();

        $obj->setInverse(true);
        $this->assertEquals(true, $obj->getInverse());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TmpTable0();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new TmpTable0();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new TmpTable0();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setQui()
     *
     * @return void
     */
    public function testSetQui(): void {

        $obj = new TmpTable0();

        $obj->setQui(10);
        $this->assertEquals(10, $obj->getQui());
    }

    /**
     * Tests setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new TmpTable0();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests setTauxPat()
     *
     * @return void
     */
    public function testSetTauxPat(): void {

        $obj = new TmpTable0();

        $obj->setTauxPat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPat());
    }

    /**
     * Tests setTauxSal()
     *
     * @return void
     */
    public function testSetTauxSal(): void {

        $obj = new TmpTable0();

        $obj->setTauxSal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSal());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TmpTable0();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TmpTable0();

        $this->assertNull($obj->getBase());
        $this->assertNull($obj->getBaseTot());
        $this->assertNull($obj->getChargePat());
        $this->assertNull($obj->getChargePatTot());
        $this->assertNull($obj->getChargeSal());
        $this->assertNull($obj->getChargeSalTot());
        $this->assertNull($obj->getClasse());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getEtablissement());
        $this->assertNull($obj->getImputation());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInverse());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getQui());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTauxPat());
        $this->assertNull($obj->getTauxSal());
        $this->assertNull($obj->getType());
    }
}
