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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TauxPlanPaie;

/**
 * Taux plan paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TauxPlanPaieTest extends AbstractTestCase {

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe() {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new TauxPlanPaie();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new TauxPlanPaie();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setFormatNonEtendu() method.
     *
     * @return void
     */
    public function testSetFormatNonEtendu() {

        $obj = new TauxPlanPaie();

        $obj->setFormatNonEtendu(true);
        $this->assertEquals(true, $obj->getFormatNonEtendu());
    }

    /**
     * Tests the setNumeroTaux() method.
     *
     * @return void
     */
    public function testSetNumeroTaux() {

        $obj = new TauxPlanPaie();

        $obj->setNumeroTaux(10);
        $this->assertEquals(10, $obj->getNumeroTaux());
    }

    /**
     * Tests the setTauxPatronal() method.
     *
     * @return void
     */
    public function testSetTauxPatronal() {

        $obj = new TauxPlanPaie();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Tests the setTauxSalarial() method.
     *
     * @return void
     */
    public function testSetTauxSalarial() {

        $obj = new TauxPlanPaie();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TauxPlanPaie();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getFormatNonEtendu());
        $this->assertNull($obj->getNumeroTaux());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
    }
}
