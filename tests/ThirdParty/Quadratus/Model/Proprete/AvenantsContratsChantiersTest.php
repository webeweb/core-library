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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AvenantsContratsChantiers;

/**
 * Avenants contrats chantiers model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContratsChantiersTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCodeAbsence() method.
     *
     * @return void
     */
    public function testSetCodeAbsence() {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTitulaire() method.
     *
     * @return void
     */
    public function testSetCodeTitulaire() {

        $obj = new AvenantsContratsChantiers();

        $obj->setCodeTitulaire("codeTitulaire");
        $this->assertEquals("codeTitulaire", $obj->getCodeTitulaire());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant() {

        $obj = new AvenantsContratsChantiers();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new AvenantsContratsChantiers();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setRemplaceAu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetRemplaceAu() {

        $obj = new AvenantsContratsChantiers();

        $obj->setRemplaceAu(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getRemplaceAu());
    }

    /**
     * Tests the setRemplaceDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetRemplaceDu() {

        $obj = new AvenantsContratsChantiers();

        $obj->setRemplaceDu(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getRemplaceDu());
    }

    /**
     * Tests the setTypeDocument() method.
     *
     * @return void
     */
    public function testSetTypeDocument() {

        $obj = new AvenantsContratsChantiers();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }
}
