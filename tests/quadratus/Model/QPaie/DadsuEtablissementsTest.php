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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuEtablissementsTest extends AbstractTestCase {

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DadsuEtablissements();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setFormaProBase()
     *
     * @return void
     */
    public function testSetFormaProBase(): void {

        $obj = new DadsuEtablissements();

        $obj->setFormaProBase(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBase());
    }

    /**
     * Test setFormaProBaseCdd()
     *
     * @return void
     */
    public function testSetFormaProBaseCdd(): void {

        $obj = new DadsuEtablissements();

        $obj->setFormaProBaseCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBaseCdd());
    }

    /**
     * Test setFormaProCodeAssuj()
     *
     * @return void
     */
    public function testSetFormaProCodeAssuj(): void {

        $obj = new DadsuEtablissements();

        $obj->setFormaProCodeAssuj("formaProCodeAssuj");
        $this->assertEquals("formaProCodeAssuj", $obj->getFormaProCodeAssuj());
    }

    /**
     * Test setPrudTypeDadsuDerogatoire()
     *
     * @return void
     */
    public function testSetPrudTypeDadsuDerogatoire(): void {

        $obj = new DadsuEtablissements();

        $obj->setPrudTypeDadsuDerogatoire("prudTypeDadsuDerogatoire");
        $this->assertEquals("prudTypeDadsuDerogatoire", $obj->getPrudTypeDadsuDerogatoire());
    }

    /**
     * Test setTaxeApprentissageBase()
     *
     * @return void
     */
    public function testSetTaxeApprentissageBase(): void {

        $obj = new DadsuEtablissements();

        $obj->setTaxeApprentissageBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissageBase());
    }

    /**
     * Test setTaxeApprentissageCodeAssuj()
     *
     * @return void
     */
    public function testSetTaxeApprentissageCodeAssuj(): void {

        $obj = new DadsuEtablissements();

        $obj->setTaxeApprentissageCodeAssuj("taxeApprentissageCodeAssuj");
        $this->assertEquals("taxeApprentissageCodeAssuj", $obj->getTaxeApprentissageCodeAssuj());
    }

    /**
     * Test __construct()
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
