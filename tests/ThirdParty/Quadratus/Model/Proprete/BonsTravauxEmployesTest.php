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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonsTravauxEmployes;

/**
 * Bons travaux employes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxEmployesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonsTravauxEmployes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getTransfertPaie());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new BonsTravauxEmployes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new BonsTravauxEmployes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new BonsTravauxEmployes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new BonsTravauxEmployes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeEquipe() method.
     *
     * @return void
     */
    public function testSetCodeEquipe() {

        $obj = new BonsTravauxEmployes();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt() {

        $obj = new BonsTravauxEmployes();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setTransfertPaie() method.
     *
     * @return void
     */
    public function testSetTransfertPaie() {

        $obj = new BonsTravauxEmployes();

        $obj->setTransfertPaie("transfertPaie");
        $this->assertEquals("transfertPaie", $obj->getTransfertPaie());
    }
}
