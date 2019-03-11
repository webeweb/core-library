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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DADSUPrevoyanceRegroupement;

/**
 * D a d s u prevoyance regroupement model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUPrevoyanceRegroupementTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DADSUPrevoyanceRegroupement();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getTypeCotis());
        $this->assertNull($obj->getValeurCotis());
        $this->assertNull($obj->getValeurCotisInitiale());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeOption() method.
     *
     * @return void
     */
    public function testSetCodeOption() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePopulation() method.
     *
     * @return void
     */
    public function testSetCodePopulation() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests the setTypeCotis() method.
     *
     * @return void
     */
    public function testSetTypeCotis() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setTypeCotis("typeCotis");
        $this->assertEquals("typeCotis", $obj->getTypeCotis());
    }

    /**
     * Tests the setValeurCotis() method.
     *
     * @return void
     */
    public function testSetValeurCotis() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setValeurCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurCotis());
    }

    /**
     * Tests the setValeurCotisInitiale() method.
     *
     * @return void
     */
    public function testSetValeurCotisInitiale() {

        $obj = new DADSUPrevoyanceRegroupement();

        $obj->setValeurCotisInitiale(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurCotisInitiale());
    }
}
