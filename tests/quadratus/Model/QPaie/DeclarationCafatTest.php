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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\DeclarationCafat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Declaration cafat test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DeclarationCafatTest extends AbstractTestCase {

    /**
     * Tests setAdresse1()
     *
     * @return void
     */
    public function testSetAdresse1(): void {

        $obj = new DeclarationCafat();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Tests setAdresse2()
     *
     * @return void
     */
    public function testSetAdresse2(): void {

        $obj = new DeclarationCafat();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Tests setAdresse3()
     *
     * @return void
     */
    public function testSetAdresse3(): void {

        $obj = new DeclarationCafat();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Tests setCodeCotis()
     *
     * @return void
     */
    public function testSetCodeCotis(): void {

        $obj = new DeclarationCafat();

        $obj->setCodeCotis("codeCotis");
        $this->assertEquals("codeCotis", $obj->getCodeCotis());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DeclarationCafat();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setDateDeclaration()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDeclaration(): void {

        // Set a Date/time mock.
        $dateDeclaration = new DateTime("2018-09-10");

        $obj = new DeclarationCafat();

        $obj->setDateDeclaration($dateDeclaration);
        $this->assertSame($dateDeclaration, $obj->getDateDeclaration());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new DeclarationCafat();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setMtAutreDeduction()
     *
     * @return void
     */
    public function testSetMtAutreDeduction(): void {

        $obj = new DeclarationCafat();

        $obj->setMtAutreDeduction(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAutreDeduction());
    }

    /**
     * Tests setMtDeductionAcompte()
     *
     * @return void
     */
    public function testSetMtDeductionAcompte(): void {

        $obj = new DeclarationCafat();

        $obj->setMtDeductionAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDeductionAcompte());
    }

    /**
     * Tests setMtDeductionAcompte1()
     *
     * @return void
     */
    public function testSetMtDeductionAcompte1(): void {

        $obj = new DeclarationCafat();

        $obj->setMtDeductionAcompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDeductionAcompte1());
    }

    /**
     * Tests setMtDeductionAcompte2()
     *
     * @return void
     */
    public function testSetMtDeductionAcompte2(): void {

        $obj = new DeclarationCafat();

        $obj->setMtDeductionAcompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDeductionAcompte2());
    }

    /**
     * Tests setNbSalaries()
     *
     * @return void
     */
    public function testSetNbSalaries(): void {

        $obj = new DeclarationCafat();

        $obj->setNbSalaries(10);
        $this->assertEquals(10, $obj->getNbSalaries());
    }

    /**
     * Tests setNoCotisant()
     *
     * @return void
     */
    public function testSetNoCotisant(): void {

        $obj = new DeclarationCafat();

        $obj->setNoCotisant("noCotisant");
        $this->assertEquals("noCotisant", $obj->getNoCotisant());
    }

    /**
     * Tests setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new DeclarationCafat();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests setPasDePersonnel()
     *
     * @return void
     */
    public function testSetPasDePersonnel(): void {

        $obj = new DeclarationCafat();

        $obj->setPasDePersonnel(true);
        $this->assertEquals(true, $obj->getPasDePersonnel());
    }

    /**
     * Tests setPasDeReembauche()
     *
     * @return void
     */
    public function testSetPasDeReembauche(): void {

        $obj = new DeclarationCafat();

        $obj->setPasDeReembauche(true);
        $this->assertEquals(true, $obj->getPasDeReembauche());
    }

    /**
     * Tests setPeriodeDecla()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new DeclarationCafat();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests setPlafond1RuammTr2()
     *
     * @return void
     */
    public function testSetPlafond1RuammTr2(): void {

        $obj = new DeclarationCafat();

        $obj->setPlafond1RuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1RuammTr2());
    }

    /**
     * Tests setPlafond2RuammTr2()
     *
     * @return void
     */
    public function testSetPlafond2RuammTr2(): void {

        $obj = new DeclarationCafat();

        $obj->setPlafond2RuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2RuammTr2());
    }

    /**
     * Tests setPlafondAutreRegime()
     *
     * @return void
     */
    public function testSetPlafondAutreRegime(): void {

        $obj = new DeclarationCafat();

        $obj->setPlafondAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondAutreRegime());
    }

    /**
     * Tests setPlafondFsh()
     *
     * @return void
     */
    public function testSetPlafondFsh(): void {

        $obj = new DeclarationCafat();

        $obj->setPlafondFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondFsh());
    }

    /**
     * Tests setPlafondMaladie()
     *
     * @return void
     */
    public function testSetPlafondMaladie(): void {

        $obj = new DeclarationCafat();

        $obj->setPlafondMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondMaladie());
    }

    /**
     * Tests setPlafondSalaire()
     *
     * @return void
     */
    public function testSetPlafondSalaire(): void {

        $obj = new DeclarationCafat();

        $obj->setPlafondSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSalaire());
    }

    /**
     * Tests setRaisonSociale()
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new DeclarationCafat();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests setRid()
     *
     * @return void
     */
    public function testSetRid(): void {

        $obj = new DeclarationCafat();

        $obj->setRid("rid");
        $this->assertEquals("rid", $obj->getRid());
    }

    /**
     * Tests setSecteur()
     *
     * @return void
     */
    public function testSetSecteur(): void {

        $obj = new DeclarationCafat();

        $obj->setSecteur("secteur");
        $this->assertEquals("secteur", $obj->getSecteur());
    }

    /**
     * Tests setTauxAt()
     *
     * @return void
     */
    public function testSetTauxAt(): void {

        $obj = new DeclarationCafat();

        $obj->setTauxAt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAt());
    }

    /**
     * Tests setTauxAutreRegime()
     *
     * @return void
     */
    public function testSetTauxAutreRegime(): void {

        $obj = new DeclarationCafat();

        $obj->setTauxAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAutreRegime());
    }

    /**
     * Tests setTauxCcs()
     *
     * @return void
     */
    public function testSetTauxCcs(): void {

        $obj = new DeclarationCafat();

        $obj->setTauxCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCcs());
    }

    /**
     * Tests setTauxFsh()
     *
     * @return void
     */
    public function testSetTauxFsh(): void {

        $obj = new DeclarationCafat();

        $obj->setTauxFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxFsh());
    }

    /**
     * Tests setTauxMaladie()
     *
     * @return void
     */
    public function testSetTauxMaladie(): void {

        $obj = new DeclarationCafat();

        $obj->setTauxMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMaladie());
    }

    /**
     * Tests setTauxRuammTr2()
     *
     * @return void
     */
    public function testSetTauxRuammTr2(): void {

        $obj = new DeclarationCafat();

        $obj->setTauxRuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRuammTr2());
    }

    /**
     * Tests setTotalCotisAutreRegime()
     *
     * @return void
     */
    public function testSetTotalCotisAutreRegime(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisAutreRegime());
    }

    /**
     * Tests setTotalCotisCcs()
     *
     * @return void
     */
    public function testSetTotalCotisCcs(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisCcs());
    }

    /**
     * Tests setTotalCotisFsh()
     *
     * @return void
     */
    public function testSetTotalCotisFsh(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisFsh());
    }

    /**
     * Tests setTotalCotisMaladie()
     *
     * @return void
     */
    public function testSetTotalCotisMaladie(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisMaladie());
    }

    /**
     * Tests setTotalCotisRuammTr2()
     *
     * @return void
     */
    public function testSetTotalCotisRuammTr2(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisRuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisRuammTr2());
    }

    /**
     * Tests setTotalRemuneration()
     *
     * @return void
     */
    public function testSetTotalRemuneration(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalRemuneration(10);
        $this->assertEquals(10, $obj->getTotalRemuneration());
    }

    /**
     * Tests setTotalRuammTr2()
     *
     * @return void
     */
    public function testSetTotalRuammTr2(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalRuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalRuammTr2());
    }

    /**
     * Tests setTotalSalaireAutreRegime()
     *
     * @return void
     */
    public function testSetTotalSalaireAutreRegime(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireAutreRegime());
    }

    /**
     * Tests setTotalSalaireCcs()
     *
     * @return void
     */
    public function testSetTotalSalaireCcs(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireCcs());
    }

    /**
     * Tests setTotalSalaireFsh()
     *
     * @return void
     */
    public function testSetTotalSalaireFsh(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireFsh());
    }

    /**
     * Tests setTotalSalaireMaladie()
     *
     * @return void
     */
    public function testSetTotalSalaireMaladie(): void {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireMaladie());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DeclarationCafat();

        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getCodeCotis());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDeclaration());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMtAutreDeduction());
        $this->assertNull($obj->getMtDeductionAcompte());
        $this->assertNull($obj->getMtDeductionAcompte1());
        $this->assertNull($obj->getMtDeductionAcompte2());
        $this->assertNull($obj->getNbSalaries());
        $this->assertNull($obj->getNoCotisant());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPasDePersonnel());
        $this->assertNull($obj->getPasDeReembauche());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPlafond1RuammTr2());
        $this->assertNull($obj->getPlafond2RuammTr2());
        $this->assertNull($obj->getPlafondAutreRegime());
        $this->assertNull($obj->getPlafondFsh());
        $this->assertNull($obj->getPlafondMaladie());
        $this->assertNull($obj->getPlafondSalaire());
        $this->assertNull($obj->getRid());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getSecteur());
        $this->assertNull($obj->getTauxAt());
        $this->assertNull($obj->getTauxAutreRegime());
        $this->assertNull($obj->getTauxCcs());
        $this->assertNull($obj->getTauxFsh());
        $this->assertNull($obj->getTauxMaladie());
        $this->assertNull($obj->getTauxRuammTr2());
        $this->assertNull($obj->getTotalCotisAutreRegime());
        $this->assertNull($obj->getTotalCotisCcs());
        $this->assertNull($obj->getTotalCotisFsh());
        $this->assertNull($obj->getTotalCotisMaladie());
        $this->assertNull($obj->getTotalCotisRuammTr2());
        $this->assertNull($obj->getTotalRuammTr2());
        $this->assertNull($obj->getTotalRemuneration());
        $this->assertNull($obj->getTotalSalaireAutreRegime());
        $this->assertNull($obj->getTotalSalaireCcs());
        $this->assertNull($obj->getTotalSalaireFsh());
        $this->assertNull($obj->getTotalSalaireMaladie());
    }
}
