<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\FichesConfidentialitesMenus;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches confidentialites menus test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class FichesConfidentialitesMenusTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setDroitAjout()
     *
     * @return void
     */
    public function testSetDroitAjout(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setDroitAjout(true);
        $this->assertEquals(true, $obj->getDroitAjout());
    }

    /**
     * Tests setDroitModification()
     *
     * @return void
     */
    public function testSetDroitModification(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setDroitModification(true);
        $this->assertEquals(true, $obj->getDroitModification());
    }

    /**
     * Tests setDroitSuppression()
     *
     * @return void
     */
    public function testSetDroitSuppression(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setDroitSuppression(true);
        $this->assertEquals(true, $obj->getDroitSuppression());
    }

    /**
     * Tests setIndex()
     *
     * @return void
     */
    public function testSetIndex(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndex(10);
        $this->assertEquals(10, $obj->getIndex());
    }

    /**
     * Tests setIndexDuPereNo1()
     *
     * @return void
     */
    public function testSetIndexDuPereNo1(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo1(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo1());
    }

    /**
     * Tests setIndexDuPereNo2()
     *
     * @return void
     */
    public function testSetIndexDuPereNo2(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo2(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo2());
    }

    /**
     * Tests setIndexDuPereNo3()
     *
     * @return void
     */
    public function testSetIndexDuPereNo3(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo3(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo3());
    }

    /**
     * Tests setIndexDuPereNo4()
     *
     * @return void
     */
    public function testSetIndexDuPereNo4(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo4(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo4());
    }

    /**
     * Tests setIndexDuPereNo5()
     *
     * @return void
     */
    public function testSetIndexDuPereNo5(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo5(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo5());
    }

    /**
     * Tests setIndexDuPereNo6()
     *
     * @return void
     */
    public function testSetIndexDuPereNo6(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo6(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo6());
    }

    /**
     * Tests setIndexDuPereNo7()
     *
     * @return void
     */
    public function testSetIndexDuPereNo7(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo7(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo7());
    }

    /**
     * Tests setLibelleMenu()
     *
     * @return void
     */
    public function testSetLibelleMenu(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setLibelleMenu("libelleMenu");
        $this->assertEquals("libelleMenu", $obj->getLibelleMenu());
    }

    /**
     * Tests setMenuVisible()
     *
     * @return void
     */
    public function testSetMenuVisible(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setMenuVisible(true);
        $this->assertEquals(true, $obj->getMenuVisible());
    }

    /**
     * Tests setMotDePasse()
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests setNiveauLigne()
     *
     * @return void
     */
    public function testSetNiveauLigne(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNiveauLigne("niveauLigne");
        $this->assertEquals("niveauLigne", $obj->getNiveauLigne());
    }

    /**
     * Tests setNomDuPereNo1()
     *
     * @return void
     */
    public function testSetNomDuPereNo1(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo1("nomDuPereNo1");
        $this->assertEquals("nomDuPereNo1", $obj->getNomDuPereNo1());
    }

    /**
     * Tests setNomDuPereNo2()
     *
     * @return void
     */
    public function testSetNomDuPereNo2(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo2("nomDuPereNo2");
        $this->assertEquals("nomDuPereNo2", $obj->getNomDuPereNo2());
    }

    /**
     * Tests setNomDuPereNo3()
     *
     * @return void
     */
    public function testSetNomDuPereNo3(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo3("nomDuPereNo3");
        $this->assertEquals("nomDuPereNo3", $obj->getNomDuPereNo3());
    }

    /**
     * Tests setNomDuPereNo4()
     *
     * @return void
     */
    public function testSetNomDuPereNo4(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo4("nomDuPereNo4");
        $this->assertEquals("nomDuPereNo4", $obj->getNomDuPereNo4());
    }

    /**
     * Tests setNomDuPereNo5()
     *
     * @return void
     */
    public function testSetNomDuPereNo5(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo5("nomDuPereNo5");
        $this->assertEquals("nomDuPereNo5", $obj->getNomDuPereNo5());
    }

    /**
     * Tests setNomDuPereNo6()
     *
     * @return void
     */
    public function testSetNomDuPereNo6(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo6("nomDuPereNo6");
        $this->assertEquals("nomDuPereNo6", $obj->getNomDuPereNo6());
    }

    /**
     * Tests setNomDuPereNo7()
     *
     * @return void
     */
    public function testSetNomDuPereNo7(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo7("nomDuPereNo7");
        $this->assertEquals("nomDuPereNo7", $obj->getNomDuPereNo7());
    }

    /**
     * Tests setNomMenu()
     *
     * @return void
     */
    public function testSetNomMenu(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomMenu("nomMenu");
        $this->assertEquals("nomMenu", $obj->getNomMenu());
    }

    /**
     * Tests setTypeSelection()
     *
     * @return void
     */
    public function testSetTypeSelection(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setTypeSelection("typeSelection");
        $this->assertEquals("typeSelection", $obj->getTypeSelection());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesConfidentialitesMenus();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDroitAjout());
        $this->assertNull($obj->getDroitModification());
        $this->assertNull($obj->getDroitSuppression());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getIndexDuPereNo1());
        $this->assertNull($obj->getIndexDuPereNo2());
        $this->assertNull($obj->getIndexDuPereNo3());
        $this->assertNull($obj->getIndexDuPereNo4());
        $this->assertNull($obj->getIndexDuPereNo5());
        $this->assertNull($obj->getIndexDuPereNo6());
        $this->assertNull($obj->getIndexDuPereNo7());
        $this->assertNull($obj->getLibelleMenu());
        $this->assertNull($obj->getMenuVisible());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNomDuPereNo1());
        $this->assertNull($obj->getNomDuPereNo2());
        $this->assertNull($obj->getNomDuPereNo3());
        $this->assertNull($obj->getNomDuPereNo4());
        $this->assertNull($obj->getNomDuPereNo5());
        $this->assertNull($obj->getNomDuPereNo6());
        $this->assertNull($obj->getNomDuPereNo7());
        $this->assertNull($obj->getNomMenu());
        $this->assertNull($obj->getTypeSelection());
    }
}
