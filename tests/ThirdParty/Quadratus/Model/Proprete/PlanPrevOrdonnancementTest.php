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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PlanPrevOrdonnancement;

/**
 * Plan prev ordonnancement test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PlanPrevOrdonnancementTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new PlanPrevOrdonnancement();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setDiscrTache() method.
     *
     * @return void
     */
    public function testSetDiscrTache() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setDiscrTache(10);
        $this->assertEquals(10, $obj->getDiscrTache());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setNumOrdre() method.
     *
     * @return void
     */
    public function testSetNumOrdre() {

        $obj = new PlanPrevOrdonnancement();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new PlanPrevOrdonnancement();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDiscrTache());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumOrdre());
    }
}
