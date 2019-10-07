<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\AffectationAna;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Affectation ana model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class AffectationAnaTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffectationAna();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getNumCompte());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getPourcentage());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new AffectationAna();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new AffectationAna();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setNumCompte() method.
     *
     * @return void
     */
    public function testSetNumCompte() {

        $obj = new AffectationAna();

        $obj->setNumCompte("numCompte");
        $this->assertEquals("numCompte", $obj->getNumCompte());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new AffectationAna();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setPourcentage() method.
     *
     * @return void
     */
    public function testSetPourcentage() {

        $obj = new AffectationAna();

        $obj->setPourcentage(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentage());
    }
}
