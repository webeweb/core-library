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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Dossier3;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dossier3 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class Dossier3Test extends AbstractTestCase {

    /**
     * Tests setAchatVenteAutomate()
     *
     * @return void
     */
    public function testSetAchatVenteAutomate(): void {

        $obj = new Dossier3();

        $obj->setAchatVenteAutomate(true);
        $this->assertEquals(true, $obj->getAchatVenteAutomate());
    }

    /**
     * Tests setAchatVenteLocalTva()
     *
     * @return void
     */
    public function testSetAchatVenteLocalTva(): void {

        $obj = new Dossier3();

        $obj->setAchatVenteLocalTva("achatVenteLocalTva");
        $this->assertEquals("achatVenteLocalTva", $obj->getAchatVenteLocalTva());
    }

    /**
     * Tests setAchatVenteStopTva()
     *
     * @return void
     */
    public function testSetAchatVenteStopTva(): void {

        $obj = new Dossier3();

        $obj->setAchatVenteStopTva(true);
        $this->assertEquals(true, $obj->getAchatVenteStopTva());
    }

    /**
     * Tests setBonsAPayer()
     *
     * @return void
     */
    public function testSetBonsAPayer(): void {

        $obj = new Dossier3();

        $obj->setBonsAPayer(true);
        $this->assertEquals(true, $obj->getBonsAPayer());
    }

    /**
     * Tests setCodeIcs()
     *
     * @return void
     */
    public function testSetCodeIcs(): void {

        $obj = new Dossier3();

        $obj->setCodeIcs("codeIcs");
        $this->assertEquals("codeIcs", $obj->getCodeIcs());
    }

    /**
     * Tests setCodeJournalRevision()
     *
     * @return void
     */
    public function testSetCodeJournalRevision(): void {

        $obj = new Dossier3();

        $obj->setCodeJournalRevision("codeJournalRevision");
        $this->assertEquals("codeJournalRevision", $obj->getCodeJournalRevision());
    }

    /**
     * Tests setCodeJournalTransfImmo()
     *
     * @return void
     */
    public function testSetCodeJournalTransfImmo(): void {

        $obj = new Dossier3();

        $obj->setCodeJournalTransfImmo("codeJournalTransfImmo");
        $this->assertEquals("codeJournalTransfImmo", $obj->getCodeJournalTransfImmo());
    }

    /**
     * Tests setCompCliFrs()
     *
     * @return void
     */
    public function testSetCompCliFrs(): void {

        $obj = new Dossier3();

        $obj->setCompCliFrs(true);
        $this->assertEquals(true, $obj->getCompCliFrs());
    }

    /**
     * Tests setCompteDebutAssurance()
     *
     * @return void
     */
    public function testSetCompteDebutAssurance(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutAssurance("compteDebutAssurance");
        $this->assertEquals("compteDebutAssurance", $obj->getCompteDebutAssurance());
    }

    /**
     * Tests setCompteDebutBail()
     *
     * @return void
     */
    public function testSetCompteDebutBail(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutBail("compteDebutBail");
        $this->assertEquals("compteDebutBail", $obj->getCompteDebutBail());
    }

    /**
     * Tests setCompteDebutCar()
     *
     * @return void
     */
    public function testSetCompteDebutCar(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutCar("compteDebutCar");
        $this->assertEquals("compteDebutCar", $obj->getCompteDebutCar());
    }

    /**
     * Tests setCompteDebutSubventions()
     *
     * @return void
     */
    public function testSetCompteDebutSubventions(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutSubventions("compteDebutSubventions");
        $this->assertEquals("compteDebutSubventions", $obj->getCompteDebutSubventions());
    }

    /**
     * Tests setCompteFinAssurance()
     *
     * @return void
     */
    public function testSetCompteFinAssurance(): void {

        $obj = new Dossier3();

        $obj->setCompteFinAssurance("compteFinAssurance");
        $this->assertEquals("compteFinAssurance", $obj->getCompteFinAssurance());
    }

    /**
     * Tests setCompteFinBail()
     *
     * @return void
     */
    public function testSetCompteFinBail(): void {

        $obj = new Dossier3();

        $obj->setCompteFinBail("compteFinBail");
        $this->assertEquals("compteFinBail", $obj->getCompteFinBail());
    }

    /**
     * Tests setCompteFinCar()
     *
     * @return void
     */
    public function testSetCompteFinCar(): void {

        $obj = new Dossier3();

        $obj->setCompteFinCar("compteFinCar");
        $this->assertEquals("compteFinCar", $obj->getCompteFinCar());
    }

    /**
     * Tests setCompteFinSubventions()
     *
     * @return void
     */
    public function testSetCompteFinSubventions(): void {

        $obj = new Dossier3();

        $obj->setCompteFinSubventions("compteFinSubventions");
        $this->assertEquals("compteFinSubventions", $obj->getCompteFinSubventions());
    }

    /**
     * Tests setCompteTvacar()
     *
     * @return void
     */
    public function testSetCompteTvacar(): void {

        $obj = new Dossier3();

        $obj->setCompteTvacar("compteTvacar");
        $this->assertEquals("compteTvacar", $obj->getCompteTvacar());
    }

    /**
     * Tests setConserveMoisRb()
     *
     * @return void
     */
    public function testSetConserveMoisRb(): void {

        $obj = new Dossier3();

        $obj->setConserveMoisRb(true);
        $this->assertEquals(true, $obj->getConserveMoisRb());
    }

    /**
     * Tests setControleEdition()
     *
     * @return void
     */
    public function testSetControleEdition(): void {

        $obj = new Dossier3();

        $obj->setControleEdition(true);
        $this->assertEquals(true, $obj->getControleEdition());
    }

    /**
     * Tests setControleExistEcr()
     *
     * @return void
     */
    public function testSetControleExistEcr(): void {

        $obj = new Dossier3();

        $obj->setControleExistEcr("controleExistEcr");
        $this->assertEquals("controleExistEcr", $obj->getControleExistEcr());
    }

    /**
     * Tests setControleRefTire()
     *
     * @return void
     */
    public function testSetControleRefTire(): void {

        $obj = new Dossier3();

        $obj->setControleRefTire(true);
        $this->assertEquals(true, $obj->getControleRefTire());
    }

    /**
     * Tests setCptTransfImmoCommuns()
     *
     * @return void
     */
    public function testSetCptTransfImmoCommuns(): void {

        $obj = new Dossier3();

        $obj->setCptTransfImmoCommuns(true);
        $this->assertEquals(true, $obj->getCptTransfImmoCommuns());
    }

    /**
     * Tests setDateRevision()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Tests setDateTransfCb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfCb(): void {

        // Set a Date/time mock.
        $dateTransfCb = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfCb($dateTransfCb);
        $this->assertSame($dateTransfCb, $obj->getDateTransfCb());
    }

    /**
     * Tests setDateTransfCliDouteux()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfCliDouteux(): void {

        // Set a Date/time mock.
        $dateTransfCliDouteux = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfCliDouteux($dateTransfCliDouteux);
        $this->assertSame($dateTransfCliDouteux, $obj->getDateTransfCliDouteux());
    }

    /**
     * Tests setDateTransfIntCourus()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntCourus(): void {

        // Set a Date/time mock.
        $dateTransfIntCourus = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfIntCourus($dateTransfIntCourus);
        $this->assertSame($dateTransfIntCourus, $obj->getDateTransfIntCourus());
    }

    /**
     * Tests setDateTransfIntExtournes()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntExtournes(): void {

        // Set a Date/time mock.
        $dateTransfIntExtournes = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfIntExtournes($dateTransfIntExtournes);
        $this->assertSame($dateTransfIntExtournes, $obj->getDateTransfIntExtournes());
    }

    /**
     * Tests setDateTransfLf()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfLf(): void {

        // Set a Date/time mock.
        $dateTransfLf = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfLf($dateTransfLf);
        $this->assertSame($dateTransfLf, $obj->getDateTransfLf());
    }

    /**
     * Tests setDateTransfProvCp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfProvCp(): void {

        // Set a Date/time mock.
        $dateTransfProvCp = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfProvCp($dateTransfProvCp);
        $this->assertSame($dateTransfProvCp, $obj->getDateTransfProvCp());
    }

    /**
     * Tests setDateTransfertEchCb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchCb(): void {

        // Set a Date/time mock.
        $dateTransfertEchCb = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfertEchCb($dateTransfertEchCb);
        $this->assertSame($dateTransfertEchCb, $obj->getDateTransfertEchCb());
    }

    /**
     * Tests setDateTransfertEchLf()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchLf(): void {

        // Set a Date/time mock.
        $dateTransfertEchLf = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfertEchLf($dateTransfertEchLf);
        $this->assertSame($dateTransfertEchLf, $obj->getDateTransfertEchLf());
    }

    /**
     * Tests setDateTransfertEcheance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEcheance(): void {

        // Set a Date/time mock.
        $dateTransfertEcheance = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfertEcheance($dateTransfertEcheance);
        $this->assertSame($dateTransfertEcheance, $obj->getDateTransfertEcheance());
    }

    /**
     * Tests setDebutCalculImmo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutCalculImmo(): void {

        // Set a Date/time mock.
        $debutCalculImmo = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDebutCalculImmo($debutCalculImmo);
        $this->assertSame($debutCalculImmo, $obj->getDebutCalculImmo());
    }

    /**
     * Tests setDelaiRejetEffet()
     *
     * @return void
     */
    public function testSetDelaiRejetEffet(): void {

        $obj = new Dossier3();

        $obj->setDelaiRejetEffet("delaiRejetEffet");
        $this->assertEquals("delaiRejetEffet", $obj->getDelaiRejetEffet());
    }

    /**
     * Tests setDetailCb()
     *
     * @return void
     */
    public function testSetDetailCb(): void {

        $obj = new Dossier3();

        $obj->setDetailCb(true);
        $this->assertEquals(true, $obj->getDetailCb());
    }

    /**
     * Tests setDetailImmo()
     *
     * @return void
     */
    public function testSetDetailImmo(): void {

        $obj = new Dossier3();

        $obj->setDetailImmo(true);
        $this->assertEquals(true, $obj->getDetailImmo());
    }

    /**
     * Tests setDotFrancCentime()
     *
     * @return void
     */
    public function testSetDotFrancCentime(): void {

        $obj = new Dossier3();

        $obj->setDotFrancCentime("dotFrancCentime");
        $this->assertEquals("dotFrancCentime", $obj->getDotFrancCentime());
    }

    /**
     * Tests setEdi400()
     *
     * @return void
     */
    public function testSetEdi400(): void {

        $obj = new Dossier3();

        $obj->setEdi400(true);
        $this->assertEquals(true, $obj->getEdi400());
    }

    /**
     * Tests setEditAnaContrepasse()
     *
     * @return void
     */
    public function testSetEditAnaContrepasse(): void {

        $obj = new Dossier3();

        $obj->setEditAnaContrepasse(true);
        $this->assertEquals(true, $obj->getEditAnaContrepasse());
    }

    /**
     * Tests setFinCalculImmo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinCalculImmo(): void {

        // Set a Date/time mock.
        $finCalculImmo = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setFinCalculImmo($finCalculImmo);
        $this->assertSame($finCalculImmo, $obj->getFinCalculImmo());
    }

    /**
     * Tests setFolioRevision()
     *
     * @return void
     */
    public function testSetFolioRevision(): void {

        $obj = new Dossier3();

        $obj->setFolioRevision(10);
        $this->assertEquals(10, $obj->getFolioRevision());
    }

    /**
     * Tests setFolioTransfImmo()
     *
     * @return void
     */
    public function testSetFolioTransfImmo(): void {

        $obj = new Dossier3();

        $obj->setFolioTransfImmo(10);
        $this->assertEquals(10, $obj->getFolioTransfImmo());
    }

    /**
     * Tests setGestionPmagClient()
     *
     * @return void
     */
    public function testSetGestionPmagClient(): void {

        $obj = new Dossier3();

        $obj->setGestionPmagClient(true);
        $this->assertEquals(true, $obj->getGestionPmagClient());
    }

    /**
     * Tests setGestionTraitePapier()
     *
     * @return void
     */
    public function testSetGestionTraitePapier(): void {

        $obj = new Dossier3();

        $obj->setGestionTraitePapier(true);
        $this->assertEquals(true, $obj->getGestionTraitePapier());
    }

    /**
     * Tests setGestionVirementFrn()
     *
     * @return void
     */
    public function testSetGestionVirementFrn(): void {

        $obj = new Dossier3();

        $obj->setGestionVirementFrn(true);
        $this->assertEquals(true, $obj->getGestionVirementFrn());
    }

    /**
     * Tests setImmoDetailLignes()
     *
     * @return void
     */
    public function testSetImmoDetailLignes(): void {

        $obj = new Dossier3();

        $obj->setImmoDetailLignes(true);
        $this->assertEquals(true, $obj->getImmoDetailLignes());
    }

    /**
     * Tests setImmoDetailParCpt()
     *
     * @return void
     */
    public function testSetImmoDetailParCpt(): void {

        $obj = new Dossier3();

        $obj->setImmoDetailParCpt(true);
        $this->assertEquals(true, $obj->getImmoDetailParCpt());
    }

    /**
     * Tests setImmoEditEnsemble()
     *
     * @return void
     */
    public function testSetImmoEditEnsemble(): void {

        $obj = new Dossier3();

        $obj->setImmoEditEnsemble(true);
        $this->assertEquals(true, $obj->getImmoEditEnsemble());
    }

    /**
     * Tests setImmoJoursParAn()
     *
     * @return void
     */
    public function testSetImmoJoursParAn(): void {

        $obj = new Dossier3();

        $obj->setImmoJoursParAn(10);
        $this->assertEquals(10, $obj->getImmoJoursParAn());
    }

    /**
     * Tests setImmoSsTotImmo()
     *
     * @return void
     */
    public function testSetImmoSsTotImmo(): void {

        $obj = new Dossier3();

        $obj->setImmoSsTotImmo(true);
        $this->assertEquals(true, $obj->getImmoSsTotImmo());
    }

    /**
     * Tests setImmoTotParCompte()
     *
     * @return void
     */
    public function testSetImmoTotParCompte(): void {

        $obj = new Dossier3();

        $obj->setImmoTotParCompte(true);
        $this->assertEquals(true, $obj->getImmoTotParCompte());
    }

    /**
     * Tests setImmoTransfertForfaitVersReel()
     *
     * @return void
     */
    public function testSetImmoTransfertForfaitVersReel(): void {

        $obj = new Dossier3();

        $obj->setImmoTransfertForfaitVersReel(true);
        $this->assertEquals(true, $obj->getImmoTransfertForfaitVersReel());
    }

    /**
     * Tests setImmoTriAnalytique()
     *
     * @return void
     */
    public function testSetImmoTriAnalytique(): void {

        $obj = new Dossier3();

        $obj->setImmoTriAnalytique(true);
        $this->assertEquals(true, $obj->getImmoTriAnalytique());
    }

    /**
     * Tests setImmoTriParDate()
     *
     * @return void
     */
    public function testSetImmoTriParDate(): void {

        $obj = new Dossier3();

        $obj->setImmoTriParDate(true);
        $this->assertEquals(true, $obj->getImmoTriParDate());
    }

    /**
     * Tests setImmoTriParService()
     *
     * @return void
     */
    public function testSetImmoTriParService(): void {

        $obj = new Dossier3();

        $obj->setImmoTriParService(true);
        $this->assertEquals(true, $obj->getImmoTriParService());
    }

    /**
     * Tests setImmoTypeLiasse()
     *
     * @return void
     */
    public function testSetImmoTypeLiasse(): void {

        $obj = new Dossier3();

        $obj->setImmoTypeLiasse("immoTypeLiasse");
        $this->assertEquals("immoTypeLiasse", $obj->getImmoTypeLiasse());
    }

    /**
     * Tests setIsClientExp()
     *
     * @return void
     */
    public function testSetIsClientExp(): void {

        $obj = new Dossier3();

        $obj->setIsClientExp(true);
        $this->assertEquals(true, $obj->getIsClientExp());
    }

    /**
     * Tests setLettrePvautBo()
     *
     * @return void
     */
    public function testSetLettrePvautBo(): void {

        $obj = new Dossier3();

        $obj->setLettrePvautBo(true);
        $this->assertEquals(true, $obj->getLettrePvautBo());
    }

    /**
     * Tests setLibVariable1()
     *
     * @return void
     */
    public function testSetLibVariable1(): void {

        $obj = new Dossier3();

        $obj->setLibVariable1("libVariable1");
        $this->assertEquals("libVariable1", $obj->getLibVariable1());
    }

    /**
     * Tests setLibVariable2()
     *
     * @return void
     */
    public function testSetLibVariable2(): void {

        $obj = new Dossier3();

        $obj->setLibVariable2("libVariable2");
        $this->assertEquals("libVariable2", $obj->getLibVariable2());
    }

    /**
     * Tests setLibVariable3()
     *
     * @return void
     */
    public function testSetLibVariable3(): void {

        $obj = new Dossier3();

        $obj->setLibVariable3("libVariable3");
        $this->assertEquals("libVariable3", $obj->getLibVariable3());
    }

    /**
     * Tests setMiseEnPortefeuilleBicF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleBicF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleBicF("miseEnPortefeuilleBicF");
        $this->assertEquals("miseEnPortefeuilleBicF", $obj->getMiseEnPortefeuilleBicF());
    }

    /**
     * Tests setMiseEnPortefeuilleDomF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleDomF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleDomF("miseEnPortefeuilleDomF");
        $this->assertEquals("miseEnPortefeuilleDomF", $obj->getMiseEnPortefeuilleDomF());
    }

    /**
     * Tests setMiseEnPortefeuilleIbanF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleIbanF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleIbanF("miseEnPortefeuilleIbanF");
        $this->assertEquals("miseEnPortefeuilleIbanF", $obj->getMiseEnPortefeuilleIbanF());
    }

    /**
     * Tests setMiseEnPortefeuilleRibF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleRibF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleRibF("miseEnPortefeuilleRibF");
        $this->assertEquals("miseEnPortefeuilleRibF", $obj->getMiseEnPortefeuilleRibF());
    }

    /**
     * Tests setMultiEchClient()
     *
     * @return void
     */
    public function testSetMultiEchClient(): void {

        $obj = new Dossier3();

        $obj->setMultiEchClient(true);
        $this->assertEquals(true, $obj->getMultiEchClient());
    }

    /**
     * Tests setMultiEchFrn()
     *
     * @return void
     */
    public function testSetMultiEchFrn(): void {

        $obj = new Dossier3();

        $obj->setMultiEchFrn(true);
        $this->assertEquals(true, $obj->getMultiEchFrn());
    }

    /**
     * Tests setMultiEchParCodeLibAuto()
     *
     * @return void
     */
    public function testSetMultiEchParCodeLibAuto(): void {

        $obj = new Dossier3();

        $obj->setMultiEchParCodeLibAuto(true);
        $this->assertEquals(true, $obj->getMultiEchParCodeLibAuto());
    }

    /**
     * Tests setNePlusAfficher()
     *
     * @return void
     */
    public function testSetNePlusAfficher(): void {

        $obj = new Dossier3();

        $obj->setNePlusAfficher(true);
        $this->assertEquals(true, $obj->getNePlusAfficher());
    }

    /**
     * Tests setNivTriAnalytique()
     *
     * @return void
     */
    public function testSetNivTriAnalytique(): void {

        $obj = new Dossier3();

        $obj->setNivTriAnalytique("nivTriAnalytique");
        $this->assertEquals("nivTriAnalytique", $obj->getNivTriAnalytique());
    }

    /**
     * Tests setNivTriBureau()
     *
     * @return void
     */
    public function testSetNivTriBureau(): void {

        $obj = new Dossier3();

        $obj->setNivTriBureau("nivTriBureau");
        $this->assertEquals("nivTriBureau", $obj->getNivTriBureau());
    }

    /**
     * Tests setNivTriFamille()
     *
     * @return void
     */
    public function testSetNivTriFamille(): void {

        $obj = new Dossier3();

        $obj->setNivTriFamille("nivTriFamille");
        $this->assertEquals("nivTriFamille", $obj->getNivTriFamille());
    }

    /**
     * Tests setNivTriNat()
     *
     * @return void
     */
    public function testSetNivTriNat(): void {

        $obj = new Dossier3();

        $obj->setNivTriNat("nivTriNat");
        $this->assertEquals("nivTriNat", $obj->getNivTriNat());
    }

    /**
     * Tests setNivTriService()
     *
     * @return void
     */
    public function testSetNivTriService(): void {

        $obj = new Dossier3();

        $obj->setNivTriService("nivTriService");
        $this->assertEquals("nivTriService", $obj->getNivTriService());
    }

    /**
     * Tests setNivTriSite()
     *
     * @return void
     */
    public function testSetNivTriSite(): void {

        $obj = new Dossier3();

        $obj->setNivTriSite("nivTriSite");
        $this->assertEquals("nivTriSite", $obj->getNivTriSite());
    }

    /**
     * Tests setNivTriZl1()
     *
     * @return void
     */
    public function testSetNivTriZl1(): void {

        $obj = new Dossier3();

        $obj->setNivTriZl1("nivTriZl1");
        $this->assertEquals("nivTriZl1", $obj->getNivTriZl1());
    }

    /**
     * Tests setNivTriZl2()
     *
     * @return void
     */
    public function testSetNivTriZl2(): void {

        $obj = new Dossier3();

        $obj->setNivTriZl2("nivTriZl2");
        $this->assertEquals("nivTriZl2", $obj->getNivTriZl2());
    }

    /**
     * Tests setNivTriZl3()
     *
     * @return void
     */
    public function testSetNivTriZl3(): void {

        $obj = new Dossier3();

        $obj->setNivTriZl3("nivTriZl3");
        $this->assertEquals("nivTriZl3", $obj->getNivTriZl3());
    }

    /**
     * Tests setNomLettreP()
     *
     * @return void
     */
    public function testSetNomLettreP(): void {

        $obj = new Dossier3();

        $obj->setNomLettreP("nomLettreP");
        $this->assertEquals("nomLettreP", $obj->getNomLettreP());
    }

    /**
     * Tests setNomLettrePc()
     *
     * @return void
     */
    public function testSetNomLettrePc(): void {

        $obj = new Dossier3();

        $obj->setNomLettrePc("nomLettrePc");
        $this->assertEquals("nomLettrePc", $obj->getNomLettrePc());
    }

    /**
     * Tests setNumChronoBo()
     *
     * @return void
     */
    public function testSetNumChronoBo(): void {

        $obj = new Dossier3();

        $obj->setNumChronoBo(10);
        $this->assertEquals(10, $obj->getNumChronoBo());
    }

    /**
     * Tests setNumLotCliDouteux()
     *
     * @return void
     */
    public function testSetNumLotCliDouteux(): void {

        $obj = new Dossier3();

        $obj->setNumLotCliDouteux(10);
        $this->assertEquals(10, $obj->getNumLotCliDouteux());
    }

    /**
     * Tests setNumLotEcritTransAssurance()
     *
     * @return void
     */
    public function testSetNumLotEcritTransAssurance(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransAssurance(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransAssurance());
    }

    /**
     * Tests setNumLotEcritTransBaux()
     *
     * @return void
     */
    public function testSetNumLotEcritTransBaux(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransBaux(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransBaux());
    }

    /**
     * Tests setNumLotEcritTransCar()
     *
     * @return void
     */
    public function testSetNumLotEcritTransCar(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransCar(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransCar());
    }

    /**
     * Tests setNumLotEcritTransPeriodicite()
     *
     * @return void
     */
    public function testSetNumLotEcritTransPeriodicite(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransPeriodicite(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransPeriodicite());
    }

    /**
     * Tests setNumLotEcritTransSubventions()
     *
     * @return void
     */
    public function testSetNumLotEcritTransSubventions(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransSubventions(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransSubventions());
    }

    /**
     * Tests setNumLotEcritTransfCb()
     *
     * @return void
     */
    public function testSetNumLotEcritTransfCb(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfCb(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfCb());
    }

    /**
     * Tests setNumLotEcritTransfImmo()
     *
     * @return void
     */
    public function testSetNumLotEcritTransfImmo(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfImmo(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfImmo());
    }

    /**
     * Tests setNumLotEcritTransfLf()
     *
     * @return void
     */
    public function testSetNumLotEcritTransfLf(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfLf(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfLf());
    }

    /**
     * Tests setNumLotIntCourus()
     *
     * @return void
     */
    public function testSetNumLotIntCourus(): void {

        $obj = new Dossier3();

        $obj->setNumLotIntCourus(10);
        $this->assertEquals(10, $obj->getNumLotIntCourus());
    }

    /**
     * Tests setNumLotIntExtournes()
     *
     * @return void
     */
    public function testSetNumLotIntExtournes(): void {

        $obj = new Dossier3();

        $obj->setNumLotIntExtournes(10);
        $this->assertEquals(10, $obj->getNumLotIntExtournes());
    }

    /**
     * Tests setNumLotProvCp()
     *
     * @return void
     */
    public function testSetNumLotProvCp(): void {

        $obj = new Dossier3();

        $obj->setNumLotProvCp(10);
        $this->assertEquals(10, $obj->getNumLotProvCp());
    }

    /**
     * Tests setOptionImportMvtRb()
     *
     * @return void
     */
    public function testSetOptionImportMvtRb(): void {

        $obj = new Dossier3();

        $obj->setOptionImportMvtRb("optionImportMvtRb");
        $this->assertEquals("optionImportMvtRb", $obj->getOptionImportMvtRb());
    }

    /**
     * Tests setPeriodeRevision()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRevision(): void {

        // Set a Date/time mock.
        $periodeRevision = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setPeriodeRevision($periodeRevision);
        $this->assertSame($periodeRevision, $obj->getPeriodeRevision());
    }

    /**
     * Tests setPeriodeTransfImmo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfImmo(): void {

        // Set a Date/time mock.
        $periodeTransfImmo = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setPeriodeTransfImmo($periodeTransfImmo);
        $this->assertSame($periodeTransfImmo, $obj->getPeriodeTransfImmo());
    }

    /**
     * Tests setPeriodiciteUtiliserLibelle()
     *
     * @return void
     */
    public function testSetPeriodiciteUtiliserLibelle(): void {

        $obj = new Dossier3();

        $obj->setPeriodiciteUtiliserLibelle(10);
        $this->assertEquals(10, $obj->getPeriodiciteUtiliserLibelle());
    }

    /**
     * Tests setProchainLotLcr()
     *
     * @return void
     */
    public function testSetProchainLotLcr(): void {

        $obj = new Dossier3();

        $obj->setProchainLotLcr(10);
        $this->assertEquals(10, $obj->getProchainLotLcr());
    }

    /**
     * Tests setProchainLotLettreP()
     *
     * @return void
     */
    public function testSetProchainLotLettreP(): void {

        $obj = new Dossier3();

        $obj->setProchainLotLettreP(10);
        $this->assertEquals(10, $obj->getProchainLotLettreP());
    }

    /**
     * Tests setProchainLotTraite()
     *
     * @return void
     */
    public function testSetProchainLotTraite(): void {

        $obj = new Dossier3();

        $obj->setProchainLotTraite(10);
        $this->assertEquals(10, $obj->getProchainLotTraite());
    }

    /**
     * Tests setProchainNumCb()
     *
     * @return void
     */
    public function testSetProchainNumCb(): void {

        $obj = new Dossier3();

        $obj->setProchainNumCb(10);
        $this->assertEquals(10, $obj->getProchainNumCb());
    }

    /**
     * Tests setProchainNumImmo()
     *
     * @return void
     */
    public function testSetProchainNumImmo(): void {

        $obj = new Dossier3();

        $obj->setProchainNumImmo(10);
        $this->assertEquals(10, $obj->getProchainNumImmo());
    }

    /**
     * Tests setProchainNumLf()
     *
     * @return void
     */
    public function testSetProchainNumLf(): void {

        $obj = new Dossier3();

        $obj->setProchainNumLf(10);
        $this->assertEquals(10, $obj->getProchainNumLf());
    }

    /**
     * Tests setProchainNumPj()
     *
     * @return void
     */
    public function testSetProchainNumPj(): void {

        $obj = new Dossier3();

        $obj->setProchainNumPj(10);
        $this->assertEquals(10, $obj->getProchainNumPj());
    }

    /**
     * Tests setRacineImportMvtRb()
     *
     * @return void
     */
    public function testSetRacineImportMvtRb(): void {

        $obj = new Dossier3();

        $obj->setRacineImportMvtRb("racineImportMvtRb");
        $this->assertEquals("racineImportMvtRb", $obj->getRacineImportMvtRb());
    }

    /**
     * Tests setRebutVautCession()
     *
     * @return void
     */
    public function testSetRebutVautCession(): void {

        $obj = new Dossier3();

        $obj->setRebutVautCession(true);
        $this->assertEquals(true, $obj->getRebutVautCession());
    }

    /**
     * Tests setRefRemiseLcr()
     *
     * @return void
     */
    public function testSetRefRemiseLcr(): void {

        $obj = new Dossier3();

        $obj->setRefRemiseLcr(10);
        $this->assertEquals(10, $obj->getRefRemiseLcr());
    }

    /**
     * Tests setRefVirementFrn()
     *
     * @return void
     */
    public function testSetRefVirementFrn(): void {

        $obj = new Dossier3();

        $obj->setRefVirementFrn(10);
        $this->assertEquals(10, $obj->getRefVirementFrn());
    }

    /**
     * Tests setRegroupFourCptEch()
     *
     * @return void
     */
    public function testSetRegroupFourCptEch(): void {

        $obj = new Dossier3();

        $obj->setRegroupFourCptEch(true);
        $this->assertEquals(true, $obj->getRegroupFourCptEch());
    }

    /**
     * Tests setRepAss()
     *
     * @return void
     */
    public function testSetRepAss(): void {

        $obj = new Dossier3();

        $obj->setRepAss(true);
        $this->assertEquals(true, $obj->getRepAss());
    }

    /**
     * Tests setRepBudget()
     *
     * @return void
     */
    public function testSetRepBudget(): void {

        $obj = new Dossier3();

        $obj->setRepBudget(true);
        $this->assertEquals(true, $obj->getRepBudget());
    }

    /**
     * Tests setRepCar()
     *
     * @return void
     */
    public function testSetRepCar(): void {

        $obj = new Dossier3();

        $obj->setRepCar(true);
        $this->assertEquals(true, $obj->getRepCar());
    }

    /**
     * Tests setRepCb()
     *
     * @return void
     */
    public function testSetRepCb(): void {

        $obj = new Dossier3();

        $obj->setRepCb(true);
        $this->assertEquals(true, $obj->getRepCb());
    }

    /**
     * Tests setRepCl()
     *
     * @return void
     */
    public function testSetRepCl(): void {

        $obj = new Dossier3();

        $obj->setRepCl(true);
        $this->assertEquals(true, $obj->getRepCl());
    }

    /**
     * Tests setRepComptaGen()
     *
     * @return void
     */
    public function testSetRepComptaGen(): void {

        $obj = new Dossier3();

        $obj->setRepComptaGen(true);
        $this->assertEquals(true, $obj->getRepComptaGen());
    }

    /**
     * Tests setRepDecTva()
     *
     * @return void
     */
    public function testSetRepDecTva(): void {

        $obj = new Dossier3();

        $obj->setRepDecTva(true);
        $this->assertEquals(true, $obj->getRepDecTva());
    }

    /**
     * Tests setRepDosRev()
     *
     * @return void
     */
    public function testSetRepDosRev(): void {

        $obj = new Dossier3();

        $obj->setRepDosRev(true);
        $this->assertEquals(true, $obj->getRepDosRev());
    }

    /**
     * Tests setRepEmprunts()
     *
     * @return void
     */
    public function testSetRepEmprunts(): void {

        $obj = new Dossier3();

        $obj->setRepEmprunts(true);
        $this->assertEquals(true, $obj->getRepEmprunts());
    }

    /**
     * Tests setRepEs()
     *
     * @return void
     */
    public function testSetRepEs(): void {

        $obj = new Dossier3();

        $obj->setRepEs(true);
        $this->assertEquals(true, $obj->getRepEs());
    }

    /**
     * Tests setRepImmo()
     *
     * @return void
     */
    public function testSetRepImmo(): void {

        $obj = new Dossier3();

        $obj->setRepImmo(true);
        $this->assertEquals(true, $obj->getRepImmo());
    }

    /**
     * Tests setRepLocFi()
     *
     * @return void
     */
    public function testSetRepLocFi(): void {

        $obj = new Dossier3();

        $obj->setRepLocFi(true);
        $this->assertEquals(true, $obj->getRepLocFi());
    }

    /**
     * Tests setRepPartielle()
     *
     * @return void
     */
    public function testSetRepPartielle(): void {

        $obj = new Dossier3();

        $obj->setRepPartielle(true);
        $this->assertEquals(true, $obj->getRepPartielle());
    }

    /**
     * Tests setRepSubv()
     *
     * @return void
     */
    public function testSetRepSubv(): void {

        $obj = new Dossier3();

        $obj->setRepSubv(true);
        $this->assertEquals(true, $obj->getRepSubv());
    }

    /**
     * Tests setRepVmp()
     *
     * @return void
     */
    public function testSetRepVmp(): void {

        $obj = new Dossier3();

        $obj->setRepVmp(true);
        $this->assertEquals(true, $obj->getRepVmp());
    }

    /**
     * Tests setRevisSoldeEnEuro()
     *
     * @return void
     */
    public function testSetRevisSoldeEnEuro(): void {

        $obj = new Dossier3();

        $obj->setRevisSoldeEnEuro(true);
        $this->assertEquals(true, $obj->getRevisSoldeEnEuro());
    }

    /**
     * Tests setRevisVoirSoldeEx()
     *
     * @return void
     */
    public function testSetRevisVoirSoldeEx(): void {

        $obj = new Dossier3();

        $obj->setRevisVoirSoldeEx(true);
        $this->assertEquals(true, $obj->getRevisVoirSoldeEx());
    }

    /**
     * Tests setSaisieCaisse()
     *
     * @return void
     */
    public function testSetSaisieCaisse(): void {

        $obj = new Dossier3();

        $obj->setSaisieCaisse(true);
        $this->assertEquals(true, $obj->getSaisieCaisse());
    }

    /**
     * Tests setSaisieNumPiece()
     *
     * @return void
     */
    public function testSetSaisieNumPiece(): void {

        $obj = new Dossier3();

        $obj->setSaisieNumPiece("saisieNumPiece");
        $this->assertEquals("saisieNumPiece", $obj->getSaisieNumPiece());
    }

    /**
     * Tests setSauverPeriodicite()
     *
     * @return void
     */
    public function testSetSauverPeriodicite(): void {

        $obj = new Dossier3();

        $obj->setSauverPeriodicite(true);
        $this->assertEquals(true, $obj->getSauverPeriodicite());
    }

    /**
     * Tests setSuiviAuxClient()
     *
     * @return void
     */
    public function testSetSuiviAuxClient(): void {

        $obj = new Dossier3();

        $obj->setSuiviAuxClient(true);
        $this->assertEquals(true, $obj->getSuiviAuxClient());
    }

    /**
     * Tests setSuiviAuxFrn()
     *
     * @return void
     */
    public function testSetSuiviAuxFrn(): void {

        $obj = new Dossier3();

        $obj->setSuiviAuxFrn(true);
        $this->assertEquals(true, $obj->getSuiviAuxFrn());
    }

    /**
     * Tests setSuiviDevises()
     *
     * @return void
     */
    public function testSetSuiviDevises(): void {

        $obj = new Dossier3();

        $obj->setSuiviDevises(true);
        $this->assertEquals(true, $obj->getSuiviDevises());
    }

    /**
     * Tests setTransfertImmoOk()
     *
     * @return void
     */
    public function testSetTransfertImmoOk(): void {

        $obj = new Dossier3();

        $obj->setTransfertImmoOk(true);
        $this->assertEquals(true, $obj->getTransfertImmoOk());
    }

    /**
     * Tests setTypePmagClient()
     *
     * @return void
     */
    public function testSetTypePmagClient(): void {

        $obj = new Dossier3();

        $obj->setTypePmagClient(10);
        $this->assertEquals(10, $obj->getTypePmagClient());
    }

    /**
     * Tests setTypeTransfertImmo()
     *
     * @return void
     */
    public function testSetTypeTransfertImmo(): void {

        $obj = new Dossier3();

        $obj->setTypeTransfertImmo("typeTransfertImmo");
        $this->assertEquals("typeTransfertImmo", $obj->getTypeTransfertImmo());
    }

    /**
     * Tests setTypeTransfertTiers()
     *
     * @return void
     */
    public function testSetTypeTransfertTiers(): void {

        $obj = new Dossier3();

        $obj->setTypeTransfertTiers("typeTransfertTiers");
        $this->assertEquals("typeTransfertTiers", $obj->getTypeTransfertTiers());
    }

    /**
     * Tests setTypeTransfertTiersF()
     *
     * @return void
     */
    public function testSetTypeTransfertTiersF(): void {

        $obj = new Dossier3();

        $obj->setTypeTransfertTiersF("typeTransfertTiersF");
        $this->assertEquals("typeTransfertTiersF", $obj->getTypeTransfertTiersF());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Dossier3();

        $this->assertNull($obj->getAchatVenteAutomate());
        $this->assertNull($obj->getAchatVenteLocalTva());
        $this->assertNull($obj->getAchatVenteStopTva());
        $this->assertNull($obj->getBonsAPayer());
        $this->assertNull($obj->getCodeIcs());
        $this->assertNull($obj->getCodeJournalRevision());
        $this->assertNull($obj->getCodeJournalTransfImmo());
        $this->assertNull($obj->getCompCliFrs());
        $this->assertNull($obj->getCompteDebutAssurance());
        $this->assertNull($obj->getCompteDebutBail());
        $this->assertNull($obj->getCompteDebutCar());
        $this->assertNull($obj->getCompteDebutSubventions());
        $this->assertNull($obj->getCompteFinAssurance());
        $this->assertNull($obj->getCompteFinBail());
        $this->assertNull($obj->getCompteFinCar());
        $this->assertNull($obj->getCompteFinSubventions());
        $this->assertNull($obj->getCompteTvacar());
        $this->assertNull($obj->getConserveMoisRb());
        $this->assertNull($obj->getControleEdition());
        $this->assertNull($obj->getControleExistEcr());
        $this->assertNull($obj->getControleRefTire());
        $this->assertNull($obj->getCptTransfImmoCommuns());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDateTransfCb());
        $this->assertNull($obj->getDateTransfCliDouteux());
        $this->assertNull($obj->getDateTransfIntCourus());
        $this->assertNull($obj->getDateTransfIntExtournes());
        $this->assertNull($obj->getDateTransfLf());
        $this->assertNull($obj->getDateTransfProvCp());
        $this->assertNull($obj->getDateTransfertEchCb());
        $this->assertNull($obj->getDateTransfertEchLf());
        $this->assertNull($obj->getDateTransfertEcheance());
        $this->assertNull($obj->getDebutCalculImmo());
        $this->assertNull($obj->getDelaiRejetEffet());
        $this->assertNull($obj->getDetailCb());
        $this->assertNull($obj->getDetailImmo());
        $this->assertNull($obj->getDotFrancCentime());
        $this->assertNull($obj->getEdi400());
        $this->assertNull($obj->getEditAnaContrepasse());
        $this->assertNull($obj->getFinCalculImmo());
        $this->assertNull($obj->getFolioRevision());
        $this->assertNull($obj->getFolioTransfImmo());
        $this->assertNull($obj->getGestionPmagClient());
        $this->assertNull($obj->getGestionTraitePapier());
        $this->assertNull($obj->getGestionVirementFrn());
        $this->assertNull($obj->getImmoDetailLignes());
        $this->assertNull($obj->getImmoDetailParCpt());
        $this->assertNull($obj->getImmoEditEnsemble());
        $this->assertNull($obj->getImmoJoursParAn());
        $this->assertNull($obj->getImmoSsTotImmo());
        $this->assertNull($obj->getImmoTotParCompte());
        $this->assertNull($obj->getImmoTransfertForfaitVersReel());
        $this->assertNull($obj->getImmoTriAnalytique());
        $this->assertNull($obj->getImmoTriParDate());
        $this->assertNull($obj->getImmoTriParService());
        $this->assertNull($obj->getImmoTypeLiasse());
        $this->assertNull($obj->getIsClientExp());
        $this->assertNull($obj->getLettrePvautBo());
        $this->assertNull($obj->getLibVariable1());
        $this->assertNull($obj->getLibVariable2());
        $this->assertNull($obj->getLibVariable3());
        $this->assertNull($obj->getMiseEnPortefeuilleBicF());
        $this->assertNull($obj->getMiseEnPortefeuilleDomF());
        $this->assertNull($obj->getMiseEnPortefeuilleIbanF());
        $this->assertNull($obj->getMiseEnPortefeuilleRibF());
        $this->assertNull($obj->getMultiEchClient());
        $this->assertNull($obj->getMultiEchFrn());
        $this->assertNull($obj->getMultiEchParCodeLibAuto());
        $this->assertNull($obj->getNePlusAfficher());
        $this->assertNull($obj->getNivTriAnalytique());
        $this->assertNull($obj->getNivTriBureau());
        $this->assertNull($obj->getNivTriFamille());
        $this->assertNull($obj->getNivTriNat());
        $this->assertNull($obj->getNivTriService());
        $this->assertNull($obj->getNivTriSite());
        $this->assertNull($obj->getNivTriZl1());
        $this->assertNull($obj->getNivTriZl2());
        $this->assertNull($obj->getNivTriZl3());
        $this->assertNull($obj->getNomLettreP());
        $this->assertNull($obj->getNomLettrePc());
        $this->assertNull($obj->getNumChronoBo());
        $this->assertNull($obj->getNumLotCliDouteux());
        $this->assertNull($obj->getNumLotEcritTransAssurance());
        $this->assertNull($obj->getNumLotEcritTransBaux());
        $this->assertNull($obj->getNumLotEcritTransCar());
        $this->assertNull($obj->getNumLotEcritTransPeriodicite());
        $this->assertNull($obj->getNumLotEcritTransSubventions());
        $this->assertNull($obj->getNumLotEcritTransfCb());
        $this->assertNull($obj->getNumLotEcritTransfImmo());
        $this->assertNull($obj->getNumLotEcritTransfLf());
        $this->assertNull($obj->getNumLotIntCourus());
        $this->assertNull($obj->getNumLotIntExtournes());
        $this->assertNull($obj->getNumLotProvCp());
        $this->assertNull($obj->getOptionImportMvtRb());
        $this->assertNull($obj->getPeriodeRevision());
        $this->assertNull($obj->getPeriodeTransfImmo());
        $this->assertNull($obj->getPeriodiciteUtiliserLibelle());
        $this->assertNull($obj->getProchainLotLcr());
        $this->assertNull($obj->getProchainLotLettreP());
        $this->assertNull($obj->getProchainLotTraite());
        $this->assertNull($obj->getProchainNumCb());
        $this->assertNull($obj->getProchainNumImmo());
        $this->assertNull($obj->getProchainNumLf());
        $this->assertNull($obj->getProchainNumPj());
        $this->assertNull($obj->getRacineImportMvtRb());
        $this->assertNull($obj->getRebutVautCession());
        $this->assertNull($obj->getRefRemiseLcr());
        $this->assertNull($obj->getRefVirementFrn());
        $this->assertNull($obj->getRegroupFourCptEch());
        $this->assertNull($obj->getRepAss());
        $this->assertNull($obj->getRepBudget());
        $this->assertNull($obj->getRepCar());
        $this->assertNull($obj->getRepCb());
        $this->assertNull($obj->getRepCl());
        $this->assertNull($obj->getRepComptaGen());
        $this->assertNull($obj->getRepDecTva());
        $this->assertNull($obj->getRepDosRev());
        $this->assertNull($obj->getRepEs());
        $this->assertNull($obj->getRepEmprunts());
        $this->assertNull($obj->getRepImmo());
        $this->assertNull($obj->getRepLocFi());
        $this->assertNull($obj->getRepPartielle());
        $this->assertNull($obj->getRepSubv());
        $this->assertNull($obj->getRepVmp());
        $this->assertNull($obj->getRevisSoldeEnEuro());
        $this->assertNull($obj->getRevisVoirSoldeEx());
        $this->assertNull($obj->getSaisieCaisse());
        $this->assertNull($obj->getSaisieNumPiece());
        $this->assertNull($obj->getSauverPeriodicite());
        $this->assertNull($obj->getSuiviAuxClient());
        $this->assertNull($obj->getSuiviAuxFrn());
        $this->assertNull($obj->getSuiviDevises());
        $this->assertNull($obj->getTransfertImmoOk());
        $this->assertNull($obj->getTypePmagClient());
        $this->assertNull($obj->getTypeTransfertImmo());
        $this->assertNull($obj->getTypeTransfertTiers());
        $this->assertNull($obj->getTypeTransfertTiersF());
    }
}
