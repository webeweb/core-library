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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DeclarationCafat;

/**
 * Declaration cafat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationCafatTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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

    /**
     * Tests the setAdresse1() method.
     *
     * @return void
     */
    public function testSetAdresse1() {

        $obj = new DeclarationCafat();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Tests the setAdresse2() method.
     *
     * @return void
     */
    public function testSetAdresse2() {

        $obj = new DeclarationCafat();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Tests the setAdresse3() method.
     *
     * @return void
     */
    public function testSetAdresse3() {

        $obj = new DeclarationCafat();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Tests the setCodeCotis() method.
     *
     * @return void
     */
    public function testSetCodeCotis() {

        $obj = new DeclarationCafat();

        $obj->setCodeCotis("codeCotis");
        $this->assertEquals("codeCotis", $obj->getCodeCotis());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DeclarationCafat();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setDateDeclaration() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDeclaration() {

        // Set a Date/time mock.
        $dateDeclaration = new DateTime("2018-09-10");

        $obj = new DeclarationCafat();

        $obj->setDateDeclaration($dateDeclaration);
        $this->assertSame($dateDeclaration, $obj->getDateDeclaration());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new DeclarationCafat();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMtAutreDeduction() method.
     *
     * @return void
     */
    public function testSetMtAutreDeduction() {

        $obj = new DeclarationCafat();

        $obj->setMtAutreDeduction(10.092018);
        $this->assertEquals(10.092018, $obj->getMtAutreDeduction());
    }

    /**
     * Tests the setMtDeductionAcompte() method.
     *
     * @return void
     */
    public function testSetMtDeductionAcompte() {

        $obj = new DeclarationCafat();

        $obj->setMtDeductionAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDeductionAcompte());
    }

    /**
     * Tests the setMtDeductionAcompte1() method.
     *
     * @return void
     */
    public function testSetMtDeductionAcompte1() {

        $obj = new DeclarationCafat();

        $obj->setMtDeductionAcompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDeductionAcompte1());
    }

    /**
     * Tests the setMtDeductionAcompte2() method.
     *
     * @return void
     */
    public function testSetMtDeductionAcompte2() {

        $obj = new DeclarationCafat();

        $obj->setMtDeductionAcompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDeductionAcompte2());
    }

    /**
     * Tests the setNbSalaries() method.
     *
     * @return void
     */
    public function testSetNbSalaries() {

        $obj = new DeclarationCafat();

        $obj->setNbSalaries(10);
        $this->assertEquals(10, $obj->getNbSalaries());
    }

    /**
     * Tests the setNoCotisant() method.
     *
     * @return void
     */
    public function testSetNoCotisant() {

        $obj = new DeclarationCafat();

        $obj->setNoCotisant("noCotisant");
        $this->assertEquals("noCotisant", $obj->getNoCotisant());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new DeclarationCafat();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPasDePersonnel() method.
     *
     * @return void
     */
    public function testSetPasDePersonnel() {

        $obj = new DeclarationCafat();

        $obj->setPasDePersonnel(true);
        $this->assertEquals(true, $obj->getPasDePersonnel());
    }

    /**
     * Tests the setPasDeReembauche() method.
     *
     * @return void
     */
    public function testSetPasDeReembauche() {

        $obj = new DeclarationCafat();

        $obj->setPasDeReembauche(true);
        $this->assertEquals(true, $obj->getPasDeReembauche());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla() {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new DeclarationCafat();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests the setPlafond1RuammTr2() method.
     *
     * @return void
     */
    public function testSetPlafond1RuammTr2() {

        $obj = new DeclarationCafat();

        $obj->setPlafond1RuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1RuammTr2());
    }

    /**
     * Tests the setPlafond2RuammTr2() method.
     *
     * @return void
     */
    public function testSetPlafond2RuammTr2() {

        $obj = new DeclarationCafat();

        $obj->setPlafond2RuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2RuammTr2());
    }

    /**
     * Tests the setPlafondAutreRegime() method.
     *
     * @return void
     */
    public function testSetPlafondAutreRegime() {

        $obj = new DeclarationCafat();

        $obj->setPlafondAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondAutreRegime());
    }

    /**
     * Tests the setPlafondFsh() method.
     *
     * @return void
     */
    public function testSetPlafondFsh() {

        $obj = new DeclarationCafat();

        $obj->setPlafondFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondFsh());
    }

    /**
     * Tests the setPlafondMaladie() method.
     *
     * @return void
     */
    public function testSetPlafondMaladie() {

        $obj = new DeclarationCafat();

        $obj->setPlafondMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondMaladie());
    }

    /**
     * Tests the setPlafondSalaire() method.
     *
     * @return void
     */
    public function testSetPlafondSalaire() {

        $obj = new DeclarationCafat();

        $obj->setPlafondSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSalaire());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new DeclarationCafat();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the setRid() method.
     *
     * @return void
     */
    public function testSetRid() {

        $obj = new DeclarationCafat();

        $obj->setRid("rid");
        $this->assertEquals("rid", $obj->getRid());
    }

    /**
     * Tests the setSecteur() method.
     *
     * @return void
     */
    public function testSetSecteur() {

        $obj = new DeclarationCafat();

        $obj->setSecteur("secteur");
        $this->assertEquals("secteur", $obj->getSecteur());
    }

    /**
     * Tests the setTauxAt() method.
     *
     * @return void
     */
    public function testSetTauxAt() {

        $obj = new DeclarationCafat();

        $obj->setTauxAt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAt());
    }

    /**
     * Tests the setTauxAutreRegime() method.
     *
     * @return void
     */
    public function testSetTauxAutreRegime() {

        $obj = new DeclarationCafat();

        $obj->setTauxAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAutreRegime());
    }

    /**
     * Tests the setTauxCcs() method.
     *
     * @return void
     */
    public function testSetTauxCcs() {

        $obj = new DeclarationCafat();

        $obj->setTauxCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCcs());
    }

    /**
     * Tests the setTauxFsh() method.
     *
     * @return void
     */
    public function testSetTauxFsh() {

        $obj = new DeclarationCafat();

        $obj->setTauxFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxFsh());
    }

    /**
     * Tests the setTauxMaladie() method.
     *
     * @return void
     */
    public function testSetTauxMaladie() {

        $obj = new DeclarationCafat();

        $obj->setTauxMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMaladie());
    }

    /**
     * Tests the setTauxRuammTr2() method.
     *
     * @return void
     */
    public function testSetTauxRuammTr2() {

        $obj = new DeclarationCafat();

        $obj->setTauxRuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRuammTr2());
    }

    /**
     * Tests the setTotalCotisAutreRegime() method.
     *
     * @return void
     */
    public function testSetTotalCotisAutreRegime() {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisAutreRegime());
    }

    /**
     * Tests the setTotalCotisCcs() method.
     *
     * @return void
     */
    public function testSetTotalCotisCcs() {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisCcs());
    }

    /**
     * Tests the setTotalCotisFsh() method.
     *
     * @return void
     */
    public function testSetTotalCotisFsh() {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisFsh());
    }

    /**
     * Tests the setTotalCotisMaladie() method.
     *
     * @return void
     */
    public function testSetTotalCotisMaladie() {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisMaladie());
    }

    /**
     * Tests the setTotalCotisRuammTr2() method.
     *
     * @return void
     */
    public function testSetTotalCotisRuammTr2() {

        $obj = new DeclarationCafat();

        $obj->setTotalCotisRuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalCotisRuammTr2());
    }

    /**
     * Tests the setTotalRemuneration() method.
     *
     * @return void
     */
    public function testSetTotalRemuneration() {

        $obj = new DeclarationCafat();

        $obj->setTotalRemuneration(10);
        $this->assertEquals(10, $obj->getTotalRemuneration());
    }

    /**
     * Tests the setTotalRuammTr2() method.
     *
     * @return void
     */
    public function testSetTotalRuammTr2() {

        $obj = new DeclarationCafat();

        $obj->setTotalRuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalRuammTr2());
    }

    /**
     * Tests the setTotalSalaireAutreRegime() method.
     *
     * @return void
     */
    public function testSetTotalSalaireAutreRegime() {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireAutreRegime(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireAutreRegime());
    }

    /**
     * Tests the setTotalSalaireCcs() method.
     *
     * @return void
     */
    public function testSetTotalSalaireCcs() {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireCcs());
    }

    /**
     * Tests the setTotalSalaireFsh() method.
     *
     * @return void
     */
    public function testSetTotalSalaireFsh() {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireFsh(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireFsh());
    }

    /**
     * Tests the setTotalSalaireMaladie() method.
     *
     * @return void
     */
    public function testSetTotalSalaireMaladie() {

        $obj = new DeclarationCafat();

        $obj->setTotalSalaireMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireMaladie());
    }
}
