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

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\AvenantsContratsChantiers;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Avenants contrats chantiers test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AvenantsContratsChantiersTest extends AbstractTestCase {

    /**
     * Test setCodeAbsence()
     *
     * @return void
     */
    public function testSetCodeAbsence(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCodeTitulaire()
     *
     * @return void
     */
    public function testSetCodeTitulaire(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeTitulaire("codeTitulaire");
        $this->assertEquals("codeTitulaire", $obj->getCodeTitulaire());
    }

    /**
     * Test setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Test setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Test setRemplaceAu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetRemplaceAu(): void {

        // Set a Date/time mock.
        $remplaceAu = new DateTime("2018-09-10");

        $obj = new AvenantsContratsChantiers();

        $obj->setRemplaceAu($remplaceAu);
        $this->assertSame($remplaceAu, $obj->getRemplaceAu());
    }

    /**
     * Test setRemplaceDu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetRemplaceDu(): void {

        // Set a Date/time mock.
        $remplaceDu = new DateTime("2018-09-10");

        $obj = new AvenantsContratsChantiers();

        $obj->setRemplaceDu($remplaceDu);
        $this->assertSame($remplaceDu, $obj->getRemplaceDu());
    }

    /**
     * Test setTypeDocument()
     *
     * @return void
     */
    public function testSetTypeDocument(): void {

        $obj = new AvenantsContratsChantiers();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AvenantsContratsChantiers();

        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTitulaire());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getRemplaceAu());
        $this->assertNull($obj->getRemplaceDu());
        $this->assertNull($obj->getTypeDocument());
    }
}
