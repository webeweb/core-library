<?php

declare(strict_types = 1);

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
use Throwable;
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
     * Test setAchatVenteAutomate()
     *
     * @return void
     */
    public function testSetAchatVenteAutomate(): void {

        $obj = new Dossier3();

        $obj->setAchatVenteAutomate(true);
        $this->assertTrue($obj->getAchatVenteAutomate());
    }

    /**
     * Test setAchatVenteLocalTva()
     *
     * @return void
     */
    public function testSetAchatVenteLocalTva(): void {

        $obj = new Dossier3();

        $obj->setAchatVenteLocalTva("achatVenteLocalTva");
        $this->assertEquals("achatVenteLocalTva", $obj->getAchatVenteLocalTva());
    }

    /**
     * Test setAchatVenteStopTva()
     *
     * @return void
     */
    public function testSetAchatVenteStopTva(): void {

        $obj = new Dossier3();

        $obj->setAchatVenteStopTva(true);
        $this->assertTrue($obj->getAchatVenteStopTva());
    }

    /**
     * Test setBonsAPayer()
     *
     * @return void
     */
    public function testSetBonsAPayer(): void {

        $obj = new Dossier3();

        $obj->setBonsAPayer(true);
        $this->assertTrue($obj->getBonsAPayer());
    }

    /**
     * Test setCodeIcs()
     *
     * @return void
     */
    public function testSetCodeIcs(): void {

        $obj = new Dossier3();

        $obj->setCodeIcs("codeIcs");
        $this->assertEquals("codeIcs", $obj->getCodeIcs());
    }

    /**
     * Test setCodeJournalRevision()
     *
     * @return void
     */
    public function testSetCodeJournalRevision(): void {

        $obj = new Dossier3();

        $obj->setCodeJournalRevision("codeJournalRevision");
        $this->assertEquals("codeJournalRevision", $obj->getCodeJournalRevision());
    }

    /**
     * Test setCodeJournalTransfImmo()
     *
     * @return void
     */
    public function testSetCodeJournalTransfImmo(): void {

        $obj = new Dossier3();

        $obj->setCodeJournalTransfImmo("codeJournalTransfImmo");
        $this->assertEquals("codeJournalTransfImmo", $obj->getCodeJournalTransfImmo());
    }

    /**
     * Test setCompCliFrs()
     *
     * @return void
     */
    public function testSetCompCliFrs(): void {

        $obj = new Dossier3();

        $obj->setCompCliFrs(true);
        $this->assertTrue($obj->getCompCliFrs());
    }

    /**
     * Test setCompteDebutAssurance()
     *
     * @return void
     */
    public function testSetCompteDebutAssurance(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutAssurance("compteDebutAssurance");
        $this->assertEquals("compteDebutAssurance", $obj->getCompteDebutAssurance());
    }

    /**
     * Test setCompteDebutBail()
     *
     * @return void
     */
    public function testSetCompteDebutBail(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutBail("compteDebutBail");
        $this->assertEquals("compteDebutBail", $obj->getCompteDebutBail());
    }

    /**
     * Test setCompteDebutCar()
     *
     * @return void
     */
    public function testSetCompteDebutCar(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutCar("compteDebutCar");
        $this->assertEquals("compteDebutCar", $obj->getCompteDebutCar());
    }

    /**
     * Test setCompteDebutSubventions()
     *
     * @return void
     */
    public function testSetCompteDebutSubventions(): void {

        $obj = new Dossier3();

        $obj->setCompteDebutSubventions("compteDebutSubventions");
        $this->assertEquals("compteDebutSubventions", $obj->getCompteDebutSubventions());
    }

    /**
     * Test setCompteFinAssurance()
     *
     * @return void
     */
    public function testSetCompteFinAssurance(): void {

        $obj = new Dossier3();

        $obj->setCompteFinAssurance("compteFinAssurance");
        $this->assertEquals("compteFinAssurance", $obj->getCompteFinAssurance());
    }

    /**
     * Test setCompteFinBail()
     *
     * @return void
     */
    public function testSetCompteFinBail(): void {

        $obj = new Dossier3();

        $obj->setCompteFinBail("compteFinBail");
        $this->assertEquals("compteFinBail", $obj->getCompteFinBail());
    }

    /**
     * Test setCompteFinCar()
     *
     * @return void
     */
    public function testSetCompteFinCar(): void {

        $obj = new Dossier3();

        $obj->setCompteFinCar("compteFinCar");
        $this->assertEquals("compteFinCar", $obj->getCompteFinCar());
    }

    /**
     * Test setCompteFinSubventions()
     *
     * @return void
     */
    public function testSetCompteFinSubventions(): void {

        $obj = new Dossier3();

        $obj->setCompteFinSubventions("compteFinSubventions");
        $this->assertEquals("compteFinSubventions", $obj->getCompteFinSubventions());
    }

    /**
     * Test setCompteTvacar()
     *
     * @return void
     */
    public function testSetCompteTvacar(): void {

        $obj = new Dossier3();

        $obj->setCompteTvacar("compteTvacar");
        $this->assertEquals("compteTvacar", $obj->getCompteTvacar());
    }

    /**
     * Test setConserveMoisRb()
     *
     * @return void
     */
    public function testSetConserveMoisRb(): void {

        $obj = new Dossier3();

        $obj->setConserveMoisRb(true);
        $this->assertTrue($obj->getConserveMoisRb());
    }

    /**
     * Test setControleEdition()
     *
     * @return void
     */
    public function testSetControleEdition(): void {

        $obj = new Dossier3();

        $obj->setControleEdition(true);
        $this->assertTrue($obj->getControleEdition());
    }

    /**
     * Test setControleExistEcr()
     *
     * @return void
     */
    public function testSetControleExistEcr(): void {

        $obj = new Dossier3();

        $obj->setControleExistEcr("controleExistEcr");
        $this->assertEquals("controleExistEcr", $obj->getControleExistEcr());
    }

    /**
     * Test setControleRefTire()
     *
     * @return void
     */
    public function testSetControleRefTire(): void {

        $obj = new Dossier3();

        $obj->setControleRefTire(true);
        $this->assertTrue($obj->getControleRefTire());
    }

    /**
     * Test setCptTransfImmoCommuns()
     *
     * @return void
     */
    public function testSetCptTransfImmoCommuns(): void {

        $obj = new Dossier3();

        $obj->setCptTransfImmoCommuns(true);
        $this->assertTrue($obj->getCptTransfImmoCommuns());
    }

    /**
     * Test setDateRevision()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Test setDateTransfCb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfCb(): void {

        // Set a Date/time mock.
        $dateTransfCb = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfCb($dateTransfCb);
        $this->assertSame($dateTransfCb, $obj->getDateTransfCb());
    }

    /**
     * Test setDateTransfCliDouteux()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfCliDouteux(): void {

        // Set a Date/time mock.
        $dateTransfCliDouteux = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfCliDouteux($dateTransfCliDouteux);
        $this->assertSame($dateTransfCliDouteux, $obj->getDateTransfCliDouteux());
    }

    /**
     * Test setDateTransfIntCourus()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntCourus(): void {

        // Set a Date/time mock.
        $dateTransfIntCourus = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfIntCourus($dateTransfIntCourus);
        $this->assertSame($dateTransfIntCourus, $obj->getDateTransfIntCourus());
    }

    /**
     * Test setDateTransfIntExtournes()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntExtournes(): void {

        // Set a Date/time mock.
        $dateTransfIntExtournes = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfIntExtournes($dateTransfIntExtournes);
        $this->assertSame($dateTransfIntExtournes, $obj->getDateTransfIntExtournes());
    }

    /**
     * Test setDateTransfLf()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfLf(): void {

        // Set a Date/time mock.
        $dateTransfLf = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfLf($dateTransfLf);
        $this->assertSame($dateTransfLf, $obj->getDateTransfLf());
    }

    /**
     * Test setDateTransfProvCp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfProvCp(): void {

        // Set a Date/time mock.
        $dateTransfProvCp = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfProvCp($dateTransfProvCp);
        $this->assertSame($dateTransfProvCp, $obj->getDateTransfProvCp());
    }

    /**
     * Test setDateTransfertEchCb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchCb(): void {

        // Set a Date/time mock.
        $dateTransfertEchCb = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfertEchCb($dateTransfertEchCb);
        $this->assertSame($dateTransfertEchCb, $obj->getDateTransfertEchCb());
    }

    /**
     * Test setDateTransfertEchLf()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchLf(): void {

        // Set a Date/time mock.
        $dateTransfertEchLf = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfertEchLf($dateTransfertEchLf);
        $this->assertSame($dateTransfertEchLf, $obj->getDateTransfertEchLf());
    }

    /**
     * Test setDateTransfertEcheance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEcheance(): void {

        // Set a Date/time mock.
        $dateTransfertEcheance = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDateTransfertEcheance($dateTransfertEcheance);
        $this->assertSame($dateTransfertEcheance, $obj->getDateTransfertEcheance());
    }

    /**
     * Test setDebutCalculImmo()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutCalculImmo(): void {

        // Set a Date/time mock.
        $debutCalculImmo = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setDebutCalculImmo($debutCalculImmo);
        $this->assertSame($debutCalculImmo, $obj->getDebutCalculImmo());
    }

    /**
     * Test setDelaiRejetEffet()
     *
     * @return void
     */
    public function testSetDelaiRejetEffet(): void {

        $obj = new Dossier3();

        $obj->setDelaiRejetEffet("delaiRejetEffet");
        $this->assertEquals("delaiRejetEffet", $obj->getDelaiRejetEffet());
    }

    /**
     * Test setDetailCb()
     *
     * @return void
     */
    public function testSetDetailCb(): void {

        $obj = new Dossier3();

        $obj->setDetailCb(true);
        $this->assertTrue($obj->getDetailCb());
    }

    /**
     * Test setDetailImmo()
     *
     * @return void
     */
    public function testSetDetailImmo(): void {

        $obj = new Dossier3();

        $obj->setDetailImmo(true);
        $this->assertTrue($obj->getDetailImmo());
    }

    /**
     * Test setDotFrancCentime()
     *
     * @return void
     */
    public function testSetDotFrancCentime(): void {

        $obj = new Dossier3();

        $obj->setDotFrancCentime("dotFrancCentime");
        $this->assertEquals("dotFrancCentime", $obj->getDotFrancCentime());
    }

    /**
     * Test setEdi400()
     *
     * @return void
     */
    public function testSetEdi400(): void {

        $obj = new Dossier3();

        $obj->setEdi400(true);
        $this->assertTrue($obj->getEdi400());
    }

    /**
     * Test setEditAnaContrepasse()
     *
     * @return void
     */
    public function testSetEditAnaContrepasse(): void {

        $obj = new Dossier3();

        $obj->setEditAnaContrepasse(true);
        $this->assertTrue($obj->getEditAnaContrepasse());
    }

    /**
     * Test setFinCalculImmo()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinCalculImmo(): void {

        // Set a Date/time mock.
        $finCalculImmo = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setFinCalculImmo($finCalculImmo);
        $this->assertSame($finCalculImmo, $obj->getFinCalculImmo());
    }

    /**
     * Test setFolioRevision()
     *
     * @return void
     */
    public function testSetFolioRevision(): void {

        $obj = new Dossier3();

        $obj->setFolioRevision(10);
        $this->assertEquals(10, $obj->getFolioRevision());
    }

    /**
     * Test setFolioTransfImmo()
     *
     * @return void
     */
    public function testSetFolioTransfImmo(): void {

        $obj = new Dossier3();

        $obj->setFolioTransfImmo(10);
        $this->assertEquals(10, $obj->getFolioTransfImmo());
    }

    /**
     * Test setGestionPmagClient()
     *
     * @return void
     */
    public function testSetGestionPmagClient(): void {

        $obj = new Dossier3();

        $obj->setGestionPmagClient(true);
        $this->assertTrue($obj->getGestionPmagClient());
    }

    /**
     * Test setGestionTraitePapier()
     *
     * @return void
     */
    public function testSetGestionTraitePapier(): void {

        $obj = new Dossier3();

        $obj->setGestionTraitePapier(true);
        $this->assertTrue($obj->getGestionTraitePapier());
    }

    /**
     * Test setGestionVirementFrn()
     *
     * @return void
     */
    public function testSetGestionVirementFrn(): void {

        $obj = new Dossier3();

        $obj->setGestionVirementFrn(true);
        $this->assertTrue($obj->getGestionVirementFrn());
    }

    /**
     * Test setImmoDetailLignes()
     *
     * @return void
     */
    public function testSetImmoDetailLignes(): void {

        $obj = new Dossier3();

        $obj->setImmoDetailLignes(true);
        $this->assertTrue($obj->getImmoDetailLignes());
    }

    /**
     * Test setImmoDetailParCpt()
     *
     * @return void
     */
    public function testSetImmoDetailParCpt(): void {

        $obj = new Dossier3();

        $obj->setImmoDetailParCpt(true);
        $this->assertTrue($obj->getImmoDetailParCpt());
    }

    /**
     * Test setImmoEditEnsemble()
     *
     * @return void
     */
    public function testSetImmoEditEnsemble(): void {

        $obj = new Dossier3();

        $obj->setImmoEditEnsemble(true);
        $this->assertTrue($obj->getImmoEditEnsemble());
    }

    /**
     * Test setImmoJoursParAn()
     *
     * @return void
     */
    public function testSetImmoJoursParAn(): void {

        $obj = new Dossier3();

        $obj->setImmoJoursParAn(10);
        $this->assertEquals(10, $obj->getImmoJoursParAn());
    }

    /**
     * Test setImmoSsTotImmo()
     *
     * @return void
     */
    public function testSetImmoSsTotImmo(): void {

        $obj = new Dossier3();

        $obj->setImmoSsTotImmo(true);
        $this->assertTrue($obj->getImmoSsTotImmo());
    }

    /**
     * Test setImmoTotParCompte()
     *
     * @return void
     */
    public function testSetImmoTotParCompte(): void {

        $obj = new Dossier3();

        $obj->setImmoTotParCompte(true);
        $this->assertTrue($obj->getImmoTotParCompte());
    }

    /**
     * Test setImmoTransfertForfaitVersReel()
     *
     * @return void
     */
    public function testSetImmoTransfertForfaitVersReel(): void {

        $obj = new Dossier3();

        $obj->setImmoTransfertForfaitVersReel(true);
        $this->assertTrue($obj->getImmoTransfertForfaitVersReel());
    }

    /**
     * Test setImmoTriAnalytique()
     *
     * @return void
     */
    public function testSetImmoTriAnalytique(): void {

        $obj = new Dossier3();

        $obj->setImmoTriAnalytique(true);
        $this->assertTrue($obj->getImmoTriAnalytique());
    }

    /**
     * Test setImmoTriParDate()
     *
     * @return void
     */
    public function testSetImmoTriParDate(): void {

        $obj = new Dossier3();

        $obj->setImmoTriParDate(true);
        $this->assertTrue($obj->getImmoTriParDate());
    }

    /**
     * Test setImmoTriParService()
     *
     * @return void
     */
    public function testSetImmoTriParService(): void {

        $obj = new Dossier3();

        $obj->setImmoTriParService(true);
        $this->assertTrue($obj->getImmoTriParService());
    }

    /**
     * Test setImmoTypeLiasse()
     *
     * @return void
     */
    public function testSetImmoTypeLiasse(): void {

        $obj = new Dossier3();

        $obj->setImmoTypeLiasse("immoTypeLiasse");
        $this->assertEquals("immoTypeLiasse", $obj->getImmoTypeLiasse());
    }

    /**
     * Test setIsClientExp()
     *
     * @return void
     */
    public function testSetIsClientExp(): void {

        $obj = new Dossier3();

        $obj->setIsClientExp(true);
        $this->assertTrue($obj->getIsClientExp());
    }

    /**
     * Test setLettrePvautBo()
     *
     * @return void
     */
    public function testSetLettrePvautBo(): void {

        $obj = new Dossier3();

        $obj->setLettrePvautBo(true);
        $this->assertTrue($obj->getLettrePvautBo());
    }

    /**
     * Test setLibVariable1()
     *
     * @return void
     */
    public function testSetLibVariable1(): void {

        $obj = new Dossier3();

        $obj->setLibVariable1("libVariable1");
        $this->assertEquals("libVariable1", $obj->getLibVariable1());
    }

    /**
     * Test setLibVariable2()
     *
     * @return void
     */
    public function testSetLibVariable2(): void {

        $obj = new Dossier3();

        $obj->setLibVariable2("libVariable2");
        $this->assertEquals("libVariable2", $obj->getLibVariable2());
    }

    /**
     * Test setLibVariable3()
     *
     * @return void
     */
    public function testSetLibVariable3(): void {

        $obj = new Dossier3();

        $obj->setLibVariable3("libVariable3");
        $this->assertEquals("libVariable3", $obj->getLibVariable3());
    }

    /**
     * Test setMiseEnPortefeuilleBicF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleBicF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleBicF("miseEnPortefeuilleBicF");
        $this->assertEquals("miseEnPortefeuilleBicF", $obj->getMiseEnPortefeuilleBicF());
    }

    /**
     * Test setMiseEnPortefeuilleDomF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleDomF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleDomF("miseEnPortefeuilleDomF");
        $this->assertEquals("miseEnPortefeuilleDomF", $obj->getMiseEnPortefeuilleDomF());
    }

    /**
     * Test setMiseEnPortefeuilleIbanF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleIbanF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleIbanF("miseEnPortefeuilleIbanF");
        $this->assertEquals("miseEnPortefeuilleIbanF", $obj->getMiseEnPortefeuilleIbanF());
    }

    /**
     * Test setMiseEnPortefeuilleRibF()
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleRibF(): void {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleRibF("miseEnPortefeuilleRibF");
        $this->assertEquals("miseEnPortefeuilleRibF", $obj->getMiseEnPortefeuilleRibF());
    }

    /**
     * Test setMultiEchClient()
     *
     * @return void
     */
    public function testSetMultiEchClient(): void {

        $obj = new Dossier3();

        $obj->setMultiEchClient(true);
        $this->assertTrue($obj->getMultiEchClient());
    }

    /**
     * Test setMultiEchFrn()
     *
     * @return void
     */
    public function testSetMultiEchFrn(): void {

        $obj = new Dossier3();

        $obj->setMultiEchFrn(true);
        $this->assertTrue($obj->getMultiEchFrn());
    }

    /**
     * Test setMultiEchParCodeLibAuto()
     *
     * @return void
     */
    public function testSetMultiEchParCodeLibAuto(): void {

        $obj = new Dossier3();

        $obj->setMultiEchParCodeLibAuto(true);
        $this->assertTrue($obj->getMultiEchParCodeLibAuto());
    }

    /**
     * Test setNePlusAfficher()
     *
     * @return void
     */
    public function testSetNePlusAfficher(): void {

        $obj = new Dossier3();

        $obj->setNePlusAfficher(true);
        $this->assertTrue($obj->getNePlusAfficher());
    }

    /**
     * Test setNivTriAnalytique()
     *
     * @return void
     */
    public function testSetNivTriAnalytique(): void {

        $obj = new Dossier3();

        $obj->setNivTriAnalytique("nivTriAnalytique");
        $this->assertEquals("nivTriAnalytique", $obj->getNivTriAnalytique());
    }

    /**
     * Test setNivTriBureau()
     *
     * @return void
     */
    public function testSetNivTriBureau(): void {

        $obj = new Dossier3();

        $obj->setNivTriBureau("nivTriBureau");
        $this->assertEquals("nivTriBureau", $obj->getNivTriBureau());
    }

    /**
     * Test setNivTriFamille()
     *
     * @return void
     */
    public function testSetNivTriFamille(): void {

        $obj = new Dossier3();

        $obj->setNivTriFamille("nivTriFamille");
        $this->assertEquals("nivTriFamille", $obj->getNivTriFamille());
    }

    /**
     * Test setNivTriNat()
     *
     * @return void
     */
    public function testSetNivTriNat(): void {

        $obj = new Dossier3();

        $obj->setNivTriNat("nivTriNat");
        $this->assertEquals("nivTriNat", $obj->getNivTriNat());
    }

    /**
     * Test setNivTriService()
     *
     * @return void
     */
    public function testSetNivTriService(): void {

        $obj = new Dossier3();

        $obj->setNivTriService("nivTriService");
        $this->assertEquals("nivTriService", $obj->getNivTriService());
    }

    /**
     * Test setNivTriSite()
     *
     * @return void
     */
    public function testSetNivTriSite(): void {

        $obj = new Dossier3();

        $obj->setNivTriSite("nivTriSite");
        $this->assertEquals("nivTriSite", $obj->getNivTriSite());
    }

    /**
     * Test setNivTriZl1()
     *
     * @return void
     */
    public function testSetNivTriZl1(): void {

        $obj = new Dossier3();

        $obj->setNivTriZl1("nivTriZl1");
        $this->assertEquals("nivTriZl1", $obj->getNivTriZl1());
    }

    /**
     * Test setNivTriZl2()
     *
     * @return void
     */
    public function testSetNivTriZl2(): void {

        $obj = new Dossier3();

        $obj->setNivTriZl2("nivTriZl2");
        $this->assertEquals("nivTriZl2", $obj->getNivTriZl2());
    }

    /**
     * Test setNivTriZl3()
     *
     * @return void
     */
    public function testSetNivTriZl3(): void {

        $obj = new Dossier3();

        $obj->setNivTriZl3("nivTriZl3");
        $this->assertEquals("nivTriZl3", $obj->getNivTriZl3());
    }

    /**
     * Test setNomLettreP()
     *
     * @return void
     */
    public function testSetNomLettreP(): void {

        $obj = new Dossier3();

        $obj->setNomLettreP("nomLettreP");
        $this->assertEquals("nomLettreP", $obj->getNomLettreP());
    }

    /**
     * Test setNomLettrePc()
     *
     * @return void
     */
    public function testSetNomLettrePc(): void {

        $obj = new Dossier3();

        $obj->setNomLettrePc("nomLettrePc");
        $this->assertEquals("nomLettrePc", $obj->getNomLettrePc());
    }

    /**
     * Test setNumChronoBo()
     *
     * @return void
     */
    public function testSetNumChronoBo(): void {

        $obj = new Dossier3();

        $obj->setNumChronoBo(10);
        $this->assertEquals(10, $obj->getNumChronoBo());
    }

    /**
     * Test setNumLotCliDouteux()
     *
     * @return void
     */
    public function testSetNumLotCliDouteux(): void {

        $obj = new Dossier3();

        $obj->setNumLotCliDouteux(10);
        $this->assertEquals(10, $obj->getNumLotCliDouteux());
    }

    /**
     * Test setNumLotEcritTransAssurance()
     *
     * @return void
     */
    public function testSetNumLotEcritTransAssurance(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransAssurance(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransAssurance());
    }

    /**
     * Test setNumLotEcritTransBaux()
     *
     * @return void
     */
    public function testSetNumLotEcritTransBaux(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransBaux(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransBaux());
    }

    /**
     * Test setNumLotEcritTransCar()
     *
     * @return void
     */
    public function testSetNumLotEcritTransCar(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransCar(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransCar());
    }

    /**
     * Test setNumLotEcritTransPeriodicite()
     *
     * @return void
     */
    public function testSetNumLotEcritTransPeriodicite(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransPeriodicite(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransPeriodicite());
    }

    /**
     * Test setNumLotEcritTransSubventions()
     *
     * @return void
     */
    public function testSetNumLotEcritTransSubventions(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransSubventions(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransSubventions());
    }

    /**
     * Test setNumLotEcritTransfCb()
     *
     * @return void
     */
    public function testSetNumLotEcritTransfCb(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfCb(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfCb());
    }

    /**
     * Test setNumLotEcritTransfImmo()
     *
     * @return void
     */
    public function testSetNumLotEcritTransfImmo(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfImmo(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfImmo());
    }

    /**
     * Test setNumLotEcritTransfLf()
     *
     * @return void
     */
    public function testSetNumLotEcritTransfLf(): void {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfLf(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfLf());
    }

    /**
     * Test setNumLotIntCourus()
     *
     * @return void
     */
    public function testSetNumLotIntCourus(): void {

        $obj = new Dossier3();

        $obj->setNumLotIntCourus(10);
        $this->assertEquals(10, $obj->getNumLotIntCourus());
    }

    /**
     * Test setNumLotIntExtournes()
     *
     * @return void
     */
    public function testSetNumLotIntExtournes(): void {

        $obj = new Dossier3();

        $obj->setNumLotIntExtournes(10);
        $this->assertEquals(10, $obj->getNumLotIntExtournes());
    }

    /**
     * Test setNumLotProvCp()
     *
     * @return void
     */
    public function testSetNumLotProvCp(): void {

        $obj = new Dossier3();

        $obj->setNumLotProvCp(10);
        $this->assertEquals(10, $obj->getNumLotProvCp());
    }

    /**
     * Test setOptionImportMvtRb()
     *
     * @return void
     */
    public function testSetOptionImportMvtRb(): void {

        $obj = new Dossier3();

        $obj->setOptionImportMvtRb("optionImportMvtRb");
        $this->assertEquals("optionImportMvtRb", $obj->getOptionImportMvtRb());
    }

    /**
     * Test setPeriodeRevision()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeRevision(): void {

        // Set a Date/time mock.
        $periodeRevision = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setPeriodeRevision($periodeRevision);
        $this->assertSame($periodeRevision, $obj->getPeriodeRevision());
    }

    /**
     * Test setPeriodeTransfImmo()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfImmo(): void {

        // Set a Date/time mock.
        $periodeTransfImmo = new DateTime("2018-09-10");

        $obj = new Dossier3();

        $obj->setPeriodeTransfImmo($periodeTransfImmo);
        $this->assertSame($periodeTransfImmo, $obj->getPeriodeTransfImmo());
    }

    /**
     * Test setPeriodiciteUtiliserLibelle()
     *
     * @return void
     */
    public function testSetPeriodiciteUtiliserLibelle(): void {

        $obj = new Dossier3();

        $obj->setPeriodiciteUtiliserLibelle(10);
        $this->assertEquals(10, $obj->getPeriodiciteUtiliserLibelle());
    }

    /**
     * Test setProchainLotLcr()
     *
     * @return void
     */
    public function testSetProchainLotLcr(): void {

        $obj = new Dossier3();

        $obj->setProchainLotLcr(10);
        $this->assertEquals(10, $obj->getProchainLotLcr());
    }

    /**
     * Test setProchainLotLettreP()
     *
     * @return void
     */
    public function testSetProchainLotLettreP(): void {

        $obj = new Dossier3();

        $obj->setProchainLotLettreP(10);
        $this->assertEquals(10, $obj->getProchainLotLettreP());
    }

    /**
     * Test setProchainLotTraite()
     *
     * @return void
     */
    public function testSetProchainLotTraite(): void {

        $obj = new Dossier3();

        $obj->setProchainLotTraite(10);
        $this->assertEquals(10, $obj->getProchainLotTraite());
    }

    /**
     * Test setProchainNumCb()
     *
     * @return void
     */
    public function testSetProchainNumCb(): void {

        $obj = new Dossier3();

        $obj->setProchainNumCb(10);
        $this->assertEquals(10, $obj->getProchainNumCb());
    }

    /**
     * Test setProchainNumImmo()
     *
     * @return void
     */
    public function testSetProchainNumImmo(): void {

        $obj = new Dossier3();

        $obj->setProchainNumImmo(10);
        $this->assertEquals(10, $obj->getProchainNumImmo());
    }

    /**
     * Test setProchainNumLf()
     *
     * @return void
     */
    public function testSetProchainNumLf(): void {

        $obj = new Dossier3();

        $obj->setProchainNumLf(10);
        $this->assertEquals(10, $obj->getProchainNumLf());
    }

    /**
     * Test setProchainNumPj()
     *
     * @return void
     */
    public function testSetProchainNumPj(): void {

        $obj = new Dossier3();

        $obj->setProchainNumPj(10);
        $this->assertEquals(10, $obj->getProchainNumPj());
    }

    /**
     * Test setRacineImportMvtRb()
     *
     * @return void
     */
    public function testSetRacineImportMvtRb(): void {

        $obj = new Dossier3();

        $obj->setRacineImportMvtRb("racineImportMvtRb");
        $this->assertEquals("racineImportMvtRb", $obj->getRacineImportMvtRb());
    }

    /**
     * Test setRebutVautCession()
     *
     * @return void
     */
    public function testSetRebutVautCession(): void {

        $obj = new Dossier3();

        $obj->setRebutVautCession(true);
        $this->assertTrue($obj->getRebutVautCession());
    }

    /**
     * Test setRefRemiseLcr()
     *
     * @return void
     */
    public function testSetRefRemiseLcr(): void {

        $obj = new Dossier3();

        $obj->setRefRemiseLcr(10);
        $this->assertEquals(10, $obj->getRefRemiseLcr());
    }

    /**
     * Test setRefVirementFrn()
     *
     * @return void
     */
    public function testSetRefVirementFrn(): void {

        $obj = new Dossier3();

        $obj->setRefVirementFrn(10);
        $this->assertEquals(10, $obj->getRefVirementFrn());
    }

    /**
     * Test setRegroupFourCptEch()
     *
     * @return void
     */
    public function testSetRegroupFourCptEch(): void {

        $obj = new Dossier3();

        $obj->setRegroupFourCptEch(true);
        $this->assertTrue($obj->getRegroupFourCptEch());
    }

    /**
     * Test setRepAss()
     *
     * @return void
     */
    public function testSetRepAss(): void {

        $obj = new Dossier3();

        $obj->setRepAss(true);
        $this->assertTrue($obj->getRepAss());
    }

    /**
     * Test setRepBudget()
     *
     * @return void
     */
    public function testSetRepBudget(): void {

        $obj = new Dossier3();

        $obj->setRepBudget(true);
        $this->assertTrue($obj->getRepBudget());
    }

    /**
     * Test setRepCar()
     *
     * @return void
     */
    public function testSetRepCar(): void {

        $obj = new Dossier3();

        $obj->setRepCar(true);
        $this->assertTrue($obj->getRepCar());
    }

    /**
     * Test setRepCb()
     *
     * @return void
     */
    public function testSetRepCb(): void {

        $obj = new Dossier3();

        $obj->setRepCb(true);
        $this->assertTrue($obj->getRepCb());
    }

    /**
     * Test setRepCl()
     *
     * @return void
     */
    public function testSetRepCl(): void {

        $obj = new Dossier3();

        $obj->setRepCl(true);
        $this->assertTrue($obj->getRepCl());
    }

    /**
     * Test setRepComptaGen()
     *
     * @return void
     */
    public function testSetRepComptaGen(): void {

        $obj = new Dossier3();

        $obj->setRepComptaGen(true);
        $this->assertTrue($obj->getRepComptaGen());
    }

    /**
     * Test setRepDecTva()
     *
     * @return void
     */
    public function testSetRepDecTva(): void {

        $obj = new Dossier3();

        $obj->setRepDecTva(true);
        $this->assertTrue($obj->getRepDecTva());
    }

    /**
     * Test setRepDosRev()
     *
     * @return void
     */
    public function testSetRepDosRev(): void {

        $obj = new Dossier3();

        $obj->setRepDosRev(true);
        $this->assertTrue($obj->getRepDosRev());
    }

    /**
     * Test setRepEmprunts()
     *
     * @return void
     */
    public function testSetRepEmprunts(): void {

        $obj = new Dossier3();

        $obj->setRepEmprunts(true);
        $this->assertTrue($obj->getRepEmprunts());
    }

    /**
     * Test setRepEs()
     *
     * @return void
     */
    public function testSetRepEs(): void {

        $obj = new Dossier3();

        $obj->setRepEs(true);
        $this->assertTrue($obj->getRepEs());
    }

    /**
     * Test setRepImmo()
     *
     * @return void
     */
    public function testSetRepImmo(): void {

        $obj = new Dossier3();

        $obj->setRepImmo(true);
        $this->assertTrue($obj->getRepImmo());
    }

    /**
     * Test setRepLocFi()
     *
     * @return void
     */
    public function testSetRepLocFi(): void {

        $obj = new Dossier3();

        $obj->setRepLocFi(true);
        $this->assertTrue($obj->getRepLocFi());
    }

    /**
     * Test setRepPartielle()
     *
     * @return void
     */
    public function testSetRepPartielle(): void {

        $obj = new Dossier3();

        $obj->setRepPartielle(true);
        $this->assertTrue($obj->getRepPartielle());
    }

    /**
     * Test setRepSubv()
     *
     * @return void
     */
    public function testSetRepSubv(): void {

        $obj = new Dossier3();

        $obj->setRepSubv(true);
        $this->assertTrue($obj->getRepSubv());
    }

    /**
     * Test setRepVmp()
     *
     * @return void
     */
    public function testSetRepVmp(): void {

        $obj = new Dossier3();

        $obj->setRepVmp(true);
        $this->assertTrue($obj->getRepVmp());
    }

    /**
     * Test setRevisSoldeEnEuro()
     *
     * @return void
     */
    public function testSetRevisSoldeEnEuro(): void {

        $obj = new Dossier3();

        $obj->setRevisSoldeEnEuro(true);
        $this->assertTrue($obj->getRevisSoldeEnEuro());
    }

    /**
     * Test setRevisVoirSoldeEx()
     *
     * @return void
     */
    public function testSetRevisVoirSoldeEx(): void {

        $obj = new Dossier3();

        $obj->setRevisVoirSoldeEx(true);
        $this->assertTrue($obj->getRevisVoirSoldeEx());
    }

    /**
     * Test setSaisieCaisse()
     *
     * @return void
     */
    public function testSetSaisieCaisse(): void {

        $obj = new Dossier3();

        $obj->setSaisieCaisse(true);
        $this->assertTrue($obj->getSaisieCaisse());
    }

    /**
     * Test setSaisieNumPiece()
     *
     * @return void
     */
    public function testSetSaisieNumPiece(): void {

        $obj = new Dossier3();

        $obj->setSaisieNumPiece("saisieNumPiece");
        $this->assertEquals("saisieNumPiece", $obj->getSaisieNumPiece());
    }

    /**
     * Test setSauverPeriodicite()
     *
     * @return void
     */
    public function testSetSauverPeriodicite(): void {

        $obj = new Dossier3();

        $obj->setSauverPeriodicite(true);
        $this->assertTrue($obj->getSauverPeriodicite());
    }

    /**
     * Test setSuiviAuxClient()
     *
     * @return void
     */
    public function testSetSuiviAuxClient(): void {

        $obj = new Dossier3();

        $obj->setSuiviAuxClient(true);
        $this->assertTrue($obj->getSuiviAuxClient());
    }

    /**
     * Test setSuiviAuxFrn()
     *
     * @return void
     */
    public function testSetSuiviAuxFrn(): void {

        $obj = new Dossier3();

        $obj->setSuiviAuxFrn(true);
        $this->assertTrue($obj->getSuiviAuxFrn());
    }

    /**
     * Test setSuiviDevises()
     *
     * @return void
     */
    public function testSetSuiviDevises(): void {

        $obj = new Dossier3();

        $obj->setSuiviDevises(true);
        $this->assertTrue($obj->getSuiviDevises());
    }

    /**
     * Test setTransfertImmoOk()
     *
     * @return void
     */
    public function testSetTransfertImmoOk(): void {

        $obj = new Dossier3();

        $obj->setTransfertImmoOk(true);
        $this->assertTrue($obj->getTransfertImmoOk());
    }

    /**
     * Test setTypePmagClient()
     *
     * @return void
     */
    public function testSetTypePmagClient(): void {

        $obj = new Dossier3();

        $obj->setTypePmagClient(10);
        $this->assertEquals(10, $obj->getTypePmagClient());
    }

    /**
     * Test setTypeTransfertImmo()
     *
     * @return void
     */
    public function testSetTypeTransfertImmo(): void {

        $obj = new Dossier3();

        $obj->setTypeTransfertImmo("typeTransfertImmo");
        $this->assertEquals("typeTransfertImmo", $obj->getTypeTransfertImmo());
    }

    /**
     * Test setTypeTransfertTiers()
     *
     * @return void
     */
    public function testSetTypeTransfertTiers(): void {

        $obj = new Dossier3();

        $obj->setTypeTransfertTiers("typeTransfertTiers");
        $this->assertEquals("typeTransfertTiers", $obj->getTypeTransfertTiers());
    }

    /**
     * Test setTypeTransfertTiersF()
     *
     * @return void
     */
    public function testSetTypeTransfertTiersF(): void {

        $obj = new Dossier3();

        $obj->setTypeTransfertTiersF("typeTransfertTiersF");
        $this->assertEquals("typeTransfertTiersF", $obj->getTypeTransfertTiersF());
    }

    /**
     * Test __construct()
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
