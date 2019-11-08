<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Phases;

/**
 * Phases test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PhasesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Phases();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumOrdre());
        $this->assertNull($obj->getSaisieFact());
        $this->assertNull($obj->getSaisieTemps());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Phases();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new Phases();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Phases();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumOrdre() method.
     *
     * @return void
     */
    public function testSetNumOrdre() {

        $obj = new Phases();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests the setSaisieFact() method.
     *
     * @return void
     */
    public function testSetSaisieFact() {

        $obj = new Phases();

        $obj->setSaisieFact(true);
        $this->assertEquals(true, $obj->getSaisieFact());
    }

    /**
     * Tests the setSaisieTemps() method.
     *
     * @return void
     */
    public function testSetSaisieTemps() {

        $obj = new Phases();

        $obj->setSaisieTemps(true);
        $this->assertEquals(true, $obj->getSaisieTemps());
    }
}
