<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DADSUEtablissementsRectif;

/**
 * D a d s u etablissements rectif model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUEtablissementsRectifTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DADSUEtablissementsRectif();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getFormaPro_Base());
        $this->assertNull($obj->getFormaPro_BaseCDD());
        $this->assertNull($obj->getIndiceRectif());
        $this->assertNull($obj->getTaxeApprentissage_Base());
    }

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new DADSUEtablissementsRectif();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DADSUEtablissementsRectif();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setFormaPro_Base() method.
     *
     * @return void
     */
    public function testSetFormaPro_Base() {

        $obj = new DADSUEtablissementsRectif();

        $obj->setFormaPro_Base(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaPro_Base());
    }

    /**
     * Tests the setFormaPro_BaseCDD() method.
     *
     * @return void
     */
    public function testSetFormaPro_BaseCDD() {

        $obj = new DADSUEtablissementsRectif();

        $obj->setFormaPro_BaseCDD(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaPro_BaseCDD());
    }

    /**
     * Tests the setIndiceRectif() method.
     *
     * @return void
     */
    public function testSetIndiceRectif() {

        $obj = new DADSUEtablissementsRectif();

        $obj->setIndiceRectif(10);
        $this->assertEquals(10, $obj->getIndiceRectif());
    }

    /**
     * Tests the setTaxeApprentissage_Base() method.
     *
     * @return void
     */
    public function testSetTaxeApprentissage_Base() {

        $obj = new DADSUEtablissementsRectif();

        $obj->setTaxeApprentissage_Base(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissage_Base());
    }
}
