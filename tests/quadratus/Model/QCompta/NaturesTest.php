<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\Natures;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Natures test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class NaturesTest extends AbstractTestCase {

    /**
     * Tests setChapitreAffect()
     *
     * @return void
     */
    public function testSetChapitreAffect(): void {

        $obj = new Natures();

        $obj->setChapitreAffect("chapitreAffect");
        $this->assertEquals("chapitreAffect", $obj->getChapitreAffect());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Natures();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Natures();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setModeCalculRepart()
     *
     * @return void
     */
    public function testSetModeCalculRepart(): void {

        $obj = new Natures();

        $obj->setModeCalculRepart("modeCalculRepart");
        $this->assertEquals("modeCalculRepart", $obj->getModeCalculRepart());
    }

    /**
     * Tests setNatureInactive()
     *
     * @return void
     */
    public function testSetNatureInactive(): void {

        $obj = new Natures();

        $obj->setNatureInactive(true);
        $this->assertEquals(true, $obj->getNatureInactive());
    }

    /**
     * Tests setOrdreEdition()
     *
     * @return void
     */
    public function testSetOrdreEdition(): void {

        $obj = new Natures();

        $obj->setOrdreEdition(10);
        $this->assertEquals(10, $obj->getOrdreEdition());
    }

    /**
     * Tests setSuiviAnneeRecolte()
     *
     * @return void
     */
    public function testSetSuiviAnneeRecolte(): void {

        $obj = new Natures();

        $obj->setSuiviAnneeRecolte(true);
        $this->assertEquals(true, $obj->getSuiviAnneeRecolte());
    }

    /**
     * Tests setSuiviQuantite()
     *
     * @return void
     */
    public function testSetSuiviQuantite(): void {

        $obj = new Natures();

        $obj->setSuiviQuantite("suiviQuantite");
        $this->assertEquals("suiviQuantite", $obj->getSuiviQuantite());
    }

    /**
     * Tests setTypeNature()
     *
     * @return void
     */
    public function testSetTypeNature(): void {

        $obj = new Natures();

        $obj->setTypeNature("typeNature");
        $this->assertEquals("typeNature", $obj->getTypeNature());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Natures();

        $this->assertNull($obj->getChapitreAffect());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getModeCalculRepart());
        $this->assertNull($obj->getNatureInactive());
        $this->assertNull($obj->getOrdreEdition());
        $this->assertNull($obj->getSuiviAnneeRecolte());
        $this->assertNull($obj->getSuiviQuantite());
        $this->assertNull($obj->getTypeNature());
    }
}
