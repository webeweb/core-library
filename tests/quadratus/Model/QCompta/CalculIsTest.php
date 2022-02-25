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

use WBW\Library\Quadratus\Model\QCompta\CalculIs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Calcul is test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CalculIsTest extends AbstractTestCase {

    /**
     * Tests setCorrespondance()
     *
     * @return void
     */
    public function testSetCorrespondance(): void {

        $obj = new CalculIs();

        $obj->setCorrespondance("correspondance");
        $this->assertEquals("correspondance", $obj->getCorrespondance());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CalculIs();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new CalculIs();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setMontantN1()
     *
     * @return void
     */
    public function testSetMontantN1(): void {

        $obj = new CalculIs();

        $obj->setMontantN1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantN1());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new CalculIs();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new CalculIs();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CalculIs();

        $this->assertNull($obj->getCorrespondance());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantN1());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getTypeLigne());
    }
}
