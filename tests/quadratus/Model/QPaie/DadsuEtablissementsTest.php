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

use WBW\Library\Quadratus\Model\QPaie\DadsuEtablissements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu etablissements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuEtablissementsTest extends AbstractTestCase {

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DadsuEtablissements();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setFormaProBase() method.
     *
     * @return void
     */
    public function testSetFormaProBase(): void {

        $obj = new DadsuEtablissements();

        $obj->setFormaProBase(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBase());
    }

    /**
     * Tests the setFormaProBaseCdd() method.
     *
     * @return void
     */
    public function testSetFormaProBaseCdd(): void {

        $obj = new DadsuEtablissements();

        $obj->setFormaProBaseCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBaseCdd());
    }

    /**
     * Tests the setFormaProCodeAssuj() method.
     *
     * @return void
     */
    public function testSetFormaProCodeAssuj(): void {

        $obj = new DadsuEtablissements();

        $obj->setFormaProCodeAssuj("formaProCodeAssuj");
        $this->assertEquals("formaProCodeAssuj", $obj->getFormaProCodeAssuj());
    }

    /**
     * Tests the setPrudTypeDadsuDerogatoire() method.
     *
     * @return void
     */
    public function testSetPrudTypeDadsuDerogatoire(): void {

        $obj = new DadsuEtablissements();

        $obj->setPrudTypeDadsuDerogatoire("prudTypeDadsuDerogatoire");
        $this->assertEquals("prudTypeDadsuDerogatoire", $obj->getPrudTypeDadsuDerogatoire());
    }

    /**
     * Tests the setTaxeApprentissageBase() method.
     *
     * @return void
     */
    public function testSetTaxeApprentissageBase(): void {

        $obj = new DadsuEtablissements();

        $obj->setTaxeApprentissageBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissageBase());
    }

    /**
     * Tests the setTaxeApprentissageCodeAssuj() method.
     *
     * @return void
     */
    public function testSetTaxeApprentissageCodeAssuj(): void {

        $obj = new DadsuEtablissements();

        $obj->setTaxeApprentissageCodeAssuj("taxeApprentissageCodeAssuj");
        $this->assertEquals("taxeApprentissageCodeAssuj", $obj->getTaxeApprentissageCodeAssuj());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuEtablissements();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getFormaProBase());
        $this->assertNull($obj->getFormaProBaseCdd());
        $this->assertNull($obj->getFormaProCodeAssuj());
        $this->assertNull($obj->getPrudTypeDadsuDerogatoire());
        $this->assertNull($obj->getTaxeApprentissageBase());
        $this->assertNull($obj->getTaxeApprentissageCodeAssuj());
    }
}
