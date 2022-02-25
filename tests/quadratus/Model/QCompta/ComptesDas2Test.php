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

use WBW\Library\Quadratus\Model\QCompta\ComptesDas2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Comptes das2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ComptesDas2Test extends AbstractTestCase {

    /**
     * Tests setAvantageNature()
     *
     * @return void
     */
    public function testSetAvantageNature(): void {

        $obj = new ComptesDas2();

        $obj->setAvantageNature(10.092018);
        $this->assertEquals(10.092018, $obj->getAvantageNature());
    }

    /**
     * Tests setIndemniteRbt()
     *
     * @return void
     */
    public function testSetIndemniteRbt(): void {

        $obj = new ComptesDas2();

        $obj->setIndemniteRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemniteRbt());
    }

    /**
     * Tests setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new ComptesDas2();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new ComptesDas2();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests setNature1()
     *
     * @return void
     */
    public function testSetNature1(): void {

        $obj = new ComptesDas2();

        $obj->setNature1("nature1");
        $this->assertEquals("nature1", $obj->getNature1());
    }

    /**
     * Tests setNature2()
     *
     * @return void
     */
    public function testSetNature2(): void {

        $obj = new ComptesDas2();

        $obj->setNature2("nature2");
        $this->assertEquals("nature2", $obj->getNature2());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ComptesDas2();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setRetenueSource()
     *
     * @return void
     */
    public function testSetRetenueSource(): void {

        $obj = new ComptesDas2();

        $obj->setRetenueSource(10.092018);
        $this->assertEquals(10.092018, $obj->getRetenueSource());
    }

    /**
     * Tests setTvada()
     *
     * @return void
     */
    public function testSetTvada(): void {

        $obj = new ComptesDas2();

        $obj->setTvada(10.092018);
        $this->assertEquals(10.092018, $obj->getTvada());
    }

    /**
     * Tests setTypeAn()
     *
     * @return void
     */
    public function testSetTypeAn(): void {

        $obj = new ComptesDas2();

        $obj->setTypeAn("typeAn");
        $this->assertEquals("typeAn", $obj->getTypeAn());
    }

    /**
     * Tests setTypeIr()
     *
     * @return void
     */
    public function testSetTypeIr(): void {

        $obj = new ComptesDas2();

        $obj->setTypeIr("typeIr");
        $this->assertEquals("typeIr", $obj->getTypeIr());
    }

    /**
     * Tests setTypeRs()
     *
     * @return void
     */
    public function testSetTypeRs(): void {

        $obj = new ComptesDas2();

        $obj->setTypeRs("typeRs");
        $this->assertEquals("typeRs", $obj->getTypeRs());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ComptesDas2();

        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getIndemniteRbt());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getNature1());
        $this->assertNull($obj->getNature2());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getRetenueSource());
        $this->assertNull($obj->getTvada());
        $this->assertNull($obj->getTypeAn());
        $this->assertNull($obj->getTypeIr());
        $this->assertNull($obj->getTypeRs());
    }
}
