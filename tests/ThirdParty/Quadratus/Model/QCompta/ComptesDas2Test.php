<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ComptesDas2;

/**
 * Comptes das2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesDas2Test extends AbstractTestCase {

    /**
     * Tests the setAvantageNature() method.
     *
     * @return void
     */
    public function testSetAvantageNature(): void {

        $obj = new ComptesDas2();

        $obj->setAvantageNature(10.092018);
        $this->assertEquals(10.092018, $obj->getAvantageNature());
    }

    /**
     * Tests the setIndemniteRbt() method.
     *
     * @return void
     */
    public function testSetIndemniteRbt(): void {

        $obj = new ComptesDas2();

        $obj->setIndemniteRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemniteRbt());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new ComptesDas2();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new ComptesDas2();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setNature1() method.
     *
     * @return void
     */
    public function testSetNature1(): void {

        $obj = new ComptesDas2();

        $obj->setNature1("nature1");
        $this->assertEquals("nature1", $obj->getNature1());
    }

    /**
     * Tests the setNature2() method.
     *
     * @return void
     */
    public function testSetNature2(): void {

        $obj = new ComptesDas2();

        $obj->setNature2("nature2");
        $this->assertEquals("nature2", $obj->getNature2());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ComptesDas2();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setRetenueSource() method.
     *
     * @return void
     */
    public function testSetRetenueSource(): void {

        $obj = new ComptesDas2();

        $obj->setRetenueSource(10.092018);
        $this->assertEquals(10.092018, $obj->getRetenueSource());
    }

    /**
     * Tests the setTvada() method.
     *
     * @return void
     */
    public function testSetTvada(): void {

        $obj = new ComptesDas2();

        $obj->setTvada(10.092018);
        $this->assertEquals(10.092018, $obj->getTvada());
    }

    /**
     * Tests the setTypeAn() method.
     *
     * @return void
     */
    public function testSetTypeAn(): void {

        $obj = new ComptesDas2();

        $obj->setTypeAn("typeAn");
        $this->assertEquals("typeAn", $obj->getTypeAn());
    }

    /**
     * Tests the setTypeIr() method.
     *
     * @return void
     */
    public function testSetTypeIr(): void {

        $obj = new ComptesDas2();

        $obj->setTypeIr("typeIr");
        $this->assertEquals("typeIr", $obj->getTypeIr());
    }

    /**
     * Tests the setTypeRs() method.
     *
     * @return void
     */
    public function testSetTypeRs(): void {

        $obj = new ComptesDas2();

        $obj->setTypeRs("typeRs");
        $this->assertEquals("typeRs", $obj->getTypeRs());
    }

    /**
     * Tests the __construct() method.
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
