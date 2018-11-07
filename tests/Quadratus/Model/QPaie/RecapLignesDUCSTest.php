<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\RecapLignesDUCS;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Recap lignes d u c s model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class RecapLignesDUCSTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RecapLignesDUCS();

        $this->assertNull($obj->getAEditerDucs());
        $this->assertNull($obj->getAcompte());
        $this->assertNull($obj->getArrondiBase());
        $this->assertNull($obj->getArrondiCotis());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateReglement());
        $this->assertNull($obj->getDateVerseSalaire());
        $this->assertNull($obj->getDucsEuro());
        $this->assertNull($obj->getEffectifInscrit());
        $this->assertNull($obj->getEffectifPaye());
        $this->assertNull($obj->getFinPer());
        $this->assertNull($obj->getGrandDecalage());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMontantTotal());
        $this->assertNull($obj->getMotifEcartEff());
        $this->assertNull($obj->getNbAutres());
        $this->assertNull($obj->getNbFemmes());
        $this->assertNull($obj->getNbFinContrat());
        $this->assertNull($obj->getNbHommes());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPaieDecalee());
        $this->assertNull($obj->getPerDebCICE());
        $this->assertNull($obj->getPerFinCICE());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPetitDecalage());
        $this->assertNull($obj->getPremMois());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getRegulDucs());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSousTypeOrganisme());
        $this->assertNull($obj->getTraiterEdi());
        $this->assertNull($obj->getTypeOrganisme());
    }

    /**
     * Tests the setAEditerDucs() method.
     *
     * @return void
     */
    public function testSetAEditerDucs() {

        $obj = new RecapLignesDUCS();

        $obj->setAEditerDucs(true);
        $this->assertEquals(true, $obj->getAEditerDucs());
    }

    /**
     * Tests the setAcompte() method.
     *
     * @return void
     */
    public function testSetAcompte() {

        $obj = new RecapLignesDUCS();

        $obj->setAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte());
    }

    /**
     * Tests the setArrondiBase() method.
     *
     * @return void
     */
    public function testSetArrondiBase() {

        $obj = new RecapLignesDUCS();

        $obj->setArrondiBase("arrondiBase");
        $this->assertEquals("arrondiBase", $obj->getArrondiBase());
    }

    /**
     * Tests the setArrondiCotis() method.
     *
     * @return void
     */
    public function testSetArrondiCotis() {

        $obj = new RecapLignesDUCS();

        $obj->setArrondiCotis("arrondiCotis");
        $this->assertEquals("arrondiCotis", $obj->getArrondiCotis());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new RecapLignesDUCS();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new RecapLignesDUCS();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setDateReglement() method.
     *
     * @return void
     */
    public function testSetDateReglement() {

        $obj = new RecapLignesDUCS();

        $obj->setDateReglement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReglement());
    }

    /**
     * Tests the setDateVerseSalaire() method.
     *
     * @return void
     */
    public function testSetDateVerseSalaire() {

        $obj = new RecapLignesDUCS();

        $obj->setDateVerseSalaire(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateVerseSalaire());
    }

    /**
     * Tests the setDucsEuro() method.
     *
     * @return void
     */
    public function testSetDucsEuro() {

        $obj = new RecapLignesDUCS();

        $obj->setDucsEuro(true);
        $this->assertEquals(true, $obj->getDucsEuro());
    }

    /**
     * Tests the setEffectifInscrit() method.
     *
     * @return void
     */
    public function testSetEffectifInscrit() {

        $obj = new RecapLignesDUCS();

        $obj->setEffectifInscrit(10);
        $this->assertEquals(10, $obj->getEffectifInscrit());
    }

    /**
     * Tests the setEffectifPaye() method.
     *
     * @return void
     */
    public function testSetEffectifPaye() {

        $obj = new RecapLignesDUCS();

        $obj->setEffectifPaye(10);
        $this->assertEquals(10, $obj->getEffectifPaye());
    }

    /**
     * Tests the setFinPer() method.
     *
     * @return void
     */
    public function testSetFinPer() {

        $obj = new RecapLignesDUCS();

        $obj->setFinPer(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPer());
    }

    /**
     * Tests the setGrandDecalage() method.
     *
     * @return void
     */
    public function testSetGrandDecalage() {

        $obj = new RecapLignesDUCS();

        $obj->setGrandDecalage(true);
        $this->assertEquals(true, $obj->getGrandDecalage());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new RecapLignesDUCS();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMontantTotal() method.
     *
     * @return void
     */
    public function testSetMontantTotal() {

        $obj = new RecapLignesDUCS();

        $obj->setMontantTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTotal());
    }

    /**
     * Tests the setMotifEcartEff() method.
     *
     * @return void
     */
    public function testSetMotifEcartEff() {

        $obj = new RecapLignesDUCS();

        $obj->setMotifEcartEff("motifEcartEff");
        $this->assertEquals("motifEcartEff", $obj->getMotifEcartEff());
    }

    /**
     * Tests the setNbAutres() method.
     *
     * @return void
     */
    public function testSetNbAutres() {

        $obj = new RecapLignesDUCS();

        $obj->setNbAutres(10.092018);
        $this->assertEquals(10.092018, $obj->getNbAutres());
    }

    /**
     * Tests the setNbFemmes() method.
     *
     * @return void
     */
    public function testSetNbFemmes() {

        $obj = new RecapLignesDUCS();

        $obj->setNbFemmes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFemmes());
    }

    /**
     * Tests the setNbFinContrat() method.
     *
     * @return void
     */
    public function testSetNbFinContrat() {

        $obj = new RecapLignesDUCS();

        $obj->setNbFinContrat(10.092018);
        $this->assertEquals(10.092018, $obj->getNbFinContrat());
    }

    /**
     * Tests the setNbHommes() method.
     *
     * @return void
     */
    public function testSetNbHommes() {

        $obj = new RecapLignesDUCS();

        $obj->setNbHommes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHommes());
    }

    /**
     * Tests the setNoAffiliation() method.
     *
     * @return void
     */
    public function testSetNoAffiliation() {

        $obj = new RecapLignesDUCS();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new RecapLignesDUCS();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPaieDecalee() method.
     *
     * @return void
     */
    public function testSetPaieDecalee() {

        $obj = new RecapLignesDUCS();

        $obj->setPaieDecalee(true);
        $this->assertEquals(true, $obj->getPaieDecalee());
    }

    /**
     * Tests the setPerDebCICE() method.
     *
     * @return void
     */
    public function testSetPerDebCICE() {

        $obj = new RecapLignesDUCS();

        $obj->setPerDebCICE(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDebCICE());
    }

    /**
     * Tests the setPerFinCICE() method.
     *
     * @return void
     */
    public function testSetPerFinCICE() {

        $obj = new RecapLignesDUCS();

        $obj->setPerFinCICE(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerFinCICE());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new RecapLignesDUCS();

        $obj->setPeriode("periode");
        $this->assertEquals("periode", $obj->getPeriode());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     */
    public function testSetPeriodeDecla() {

        $obj = new RecapLignesDUCS();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }

    /**
     * Tests the setPetitDecalage() method.
     *
     * @return void
     */
    public function testSetPetitDecalage() {

        $obj = new RecapLignesDUCS();

        $obj->setPetitDecalage(true);
        $this->assertEquals(true, $obj->getPetitDecalage());
    }

    /**
     * Tests the setPremMois() method.
     *
     * @return void
     */
    public function testSetPremMois() {

        $obj = new RecapLignesDUCS();

        $obj->setPremMois(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPremMois());
    }

    /**
     * Tests the setRaisonSociale() method.
     *
     * @return void
     */
    public function testSetRaisonSociale() {

        $obj = new RecapLignesDUCS();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests the setRegulDucs() method.
     *
     * @return void
     */
    public function testSetRegulDucs() {

        $obj = new RecapLignesDUCS();

        $obj->setRegulDucs(10.092018);
        $this->assertEquals(10.092018, $obj->getRegulDucs());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new RecapLignesDUCS();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSousTypeOrganisme() method.
     *
     * @return void
     */
    public function testSetSousTypeOrganisme() {

        $obj = new RecapLignesDUCS();

        $obj->setSousTypeOrganisme("sousTypeOrganisme");
        $this->assertEquals("sousTypeOrganisme", $obj->getSousTypeOrganisme());
    }

    /**
     * Tests the setTraiterEdi() method.
     *
     * @return void
     */
    public function testSetTraiterEdi() {

        $obj = new RecapLignesDUCS();

        $obj->setTraiterEdi(true);
        $this->assertEquals(true, $obj->getTraiterEdi());
    }

    /**
     * Tests the setTypeOrganisme() method.
     *
     * @return void
     */
    public function testSetTypeOrganisme() {

        $obj = new RecapLignesDUCS();

        $obj->setTypeOrganisme("typeOrganisme");
        $this->assertEquals("typeOrganisme", $obj->getTypeOrganisme());
    }

}
