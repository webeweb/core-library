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
use WBW\Library\Quadratus\Model\QCompta\Dossier1;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dossier1 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class Dossier1Test extends AbstractTestCase {

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Dossier1();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Dossier1();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCalculAnaFait()
     *
     * @return void
     */
    public function testSetCalculAnaFait(): void {

        $obj = new Dossier1();

        $obj->setCalculAnaFait(true);
        $this->assertEquals(true, $obj->getCalculAnaFait());
    }

    /**
     * Tests setCheminImplantationAscii()
     *
     * @return void
     */
    public function testSetCheminImplantationAscii(): void {

        $obj = new Dossier1();

        $obj->setCheminImplantationAscii("cheminImplantationAscii");
        $this->assertEquals("cheminImplantationAscii", $obj->getCheminImplantationAscii());
    }

    /**
     * Tests setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new Dossier1();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests setCleAcces1()
     *
     * @return void
     */
    public function testSetCleAcces1(): void {

        $obj = new Dossier1();

        $obj->setCleAcces1("cleAcces1");
        $this->assertEquals("cleAcces1", $obj->getCleAcces1());
    }

    /**
     * Tests setCleAcces10()
     *
     * @return void
     */
    public function testSetCleAcces10(): void {

        $obj = new Dossier1();

        $obj->setCleAcces10("cleAcces10");
        $this->assertEquals("cleAcces10", $obj->getCleAcces10());
    }

    /**
     * Tests setCleAcces2()
     *
     * @return void
     */
    public function testSetCleAcces2(): void {

        $obj = new Dossier1();

        $obj->setCleAcces2("cleAcces2");
        $this->assertEquals("cleAcces2", $obj->getCleAcces2());
    }

    /**
     * Tests setCleAcces3()
     *
     * @return void
     */
    public function testSetCleAcces3(): void {

        $obj = new Dossier1();

        $obj->setCleAcces3("cleAcces3");
        $this->assertEquals("cleAcces3", $obj->getCleAcces3());
    }

    /**
     * Tests setCleAcces4()
     *
     * @return void
     */
    public function testSetCleAcces4(): void {

        $obj = new Dossier1();

        $obj->setCleAcces4("cleAcces4");
        $this->assertEquals("cleAcces4", $obj->getCleAcces4());
    }

    /**
     * Tests setCleAcces5()
     *
     * @return void
     */
    public function testSetCleAcces5(): void {

        $obj = new Dossier1();

        $obj->setCleAcces5("cleAcces5");
        $this->assertEquals("cleAcces5", $obj->getCleAcces5());
    }

    /**
     * Tests setCleAcces6()
     *
     * @return void
     */
    public function testSetCleAcces6(): void {

        $obj = new Dossier1();

        $obj->setCleAcces6("cleAcces6");
        $this->assertEquals("cleAcces6", $obj->getCleAcces6());
    }

    /**
     * Tests setCleAcces7()
     *
     * @return void
     */
    public function testSetCleAcces7(): void {

        $obj = new Dossier1();

        $obj->setCleAcces7("cleAcces7");
        $this->assertEquals("cleAcces7", $obj->getCleAcces7());
    }

    /**
     * Tests setCleAcces8()
     *
     * @return void
     */
    public function testSetCleAcces8(): void {

        $obj = new Dossier1();

        $obj->setCleAcces8("cleAcces8");
        $this->assertEquals("cleAcces8", $obj->getCleAcces8());
    }

    /**
     * Tests setCleAcces9()
     *
     * @return void
     */
    public function testSetCleAcces9(): void {

        $obj = new Dossier1();

        $obj->setCleAcces9("cleAcces9");
        $this->assertEquals("cleAcces9", $obj->getCleAcces9());
    }

    /**
     * Tests setCleDeblocageJournaux()
     *
     * @return void
     */
    public function testSetCleDeblocageJournaux(): void {

        $obj = new Dossier1();

        $obj->setCleDeblocageJournaux("cleDeblocageJournaux");
        $this->assertEquals("cleDeblocageJournaux", $obj->getCleDeblocageJournaux());
    }

    /**
     * Tests setClePortable()
     *
     * @return void
     */
    public function testSetClePortable(): void {

        $obj = new Dossier1();

        $obj->setClePortable("clePortable");
        $this->assertEquals("clePortable", $obj->getClePortable());
    }

    /**
     * Tests setCodeEquipe()
     *
     * @return void
     */
    public function testSetCodeEquipe(): void {

        $obj = new Dossier1();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests setCodeNaf()
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new Dossier1();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Tests setCodeNaf2008()
     *
     * @return void
     */
    public function testSetCodeNaf2008(): void {

        $obj = new Dossier1();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Tests setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Dossier1();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Dossier1();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Dossier1();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setCopieBackup()
     *
     * @return void
     */
    public function testSetCopieBackup(): void {

        $obj = new Dossier1();

        $obj->setCopieBackup("copieBackup");
        $this->assertEquals("copieBackup", $obj->getCopieBackup());
    }

    /**
     * Tests setCptDebSuiviClasse0()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse0(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse0("cptDebSuiviClasse0");
        $this->assertEquals("cptDebSuiviClasse0", $obj->getCptDebSuiviClasse0());
    }

    /**
     * Tests setCptDebSuiviClasse1()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse1(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse1("cptDebSuiviClasse1");
        $this->assertEquals("cptDebSuiviClasse1", $obj->getCptDebSuiviClasse1());
    }

    /**
     * Tests setCptDebSuiviClasse2()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse2(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse2("cptDebSuiviClasse2");
        $this->assertEquals("cptDebSuiviClasse2", $obj->getCptDebSuiviClasse2());
    }

    /**
     * Tests setCptDebSuiviClasse3()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse3(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse3("cptDebSuiviClasse3");
        $this->assertEquals("cptDebSuiviClasse3", $obj->getCptDebSuiviClasse3());
    }

    /**
     * Tests setCptDebSuiviClasse4()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse4(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse4("cptDebSuiviClasse4");
        $this->assertEquals("cptDebSuiviClasse4", $obj->getCptDebSuiviClasse4());
    }

    /**
     * Tests setCptDebSuiviClasse5()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse5(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse5("cptDebSuiviClasse5");
        $this->assertEquals("cptDebSuiviClasse5", $obj->getCptDebSuiviClasse5());
    }

    /**
     * Tests setCptDebSuiviClasse8()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse8(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse8("cptDebSuiviClasse8");
        $this->assertEquals("cptDebSuiviClasse8", $obj->getCptDebSuiviClasse8());
    }

    /**
     * Tests setCptDebSuiviClasse9()
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse9(): void {

        $obj = new Dossier1();

        $obj->setCptDebSuiviClasse9("cptDebSuiviClasse9");
        $this->assertEquals("cptDebSuiviClasse9", $obj->getCptDebSuiviClasse9());
    }

    /**
     * Tests setCptFinSuiviClasse0()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse0(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse0("cptFinSuiviClasse0");
        $this->assertEquals("cptFinSuiviClasse0", $obj->getCptFinSuiviClasse0());
    }

    /**
     * Tests setCptFinSuiviClasse1()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse1(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse1("cptFinSuiviClasse1");
        $this->assertEquals("cptFinSuiviClasse1", $obj->getCptFinSuiviClasse1());
    }

    /**
     * Tests setCptFinSuiviClasse2()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse2(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse2("cptFinSuiviClasse2");
        $this->assertEquals("cptFinSuiviClasse2", $obj->getCptFinSuiviClasse2());
    }

    /**
     * Tests setCptFinSuiviClasse3()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse3(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse3("cptFinSuiviClasse3");
        $this->assertEquals("cptFinSuiviClasse3", $obj->getCptFinSuiviClasse3());
    }

    /**
     * Tests setCptFinSuiviClasse4()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse4(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse4("cptFinSuiviClasse4");
        $this->assertEquals("cptFinSuiviClasse4", $obj->getCptFinSuiviClasse4());
    }

    /**
     * Tests setCptFinSuiviClasse5()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse5(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse5("cptFinSuiviClasse5");
        $this->assertEquals("cptFinSuiviClasse5", $obj->getCptFinSuiviClasse5());
    }

    /**
     * Tests setCptFinSuiviClasse8()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse8(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse8("cptFinSuiviClasse8");
        $this->assertEquals("cptFinSuiviClasse8", $obj->getCptFinSuiviClasse8());
    }

    /**
     * Tests setCptFinSuiviClasse9()
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse9(): void {

        $obj = new Dossier1();

        $obj->setCptFinSuiviClasse9("cptFinSuiviClasse9");
        $this->assertEquals("cptFinSuiviClasse9", $obj->getCptFinSuiviClasse9());
    }

    /**
     * Tests setCreateurDossier()
     *
     * @return void
     */
    public function testSetCreateurDossier(): void {

        $obj = new Dossier1();

        $obj->setCreateurDossier("createurDossier");
        $this->assertEquals("createurDossier", $obj->getCreateurDossier());
    }

    /**
     * Tests setDateLimiteSaisie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteSaisie(): void {

        // Set a Date/time mock.
        $dateLimiteSaisie = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDateLimiteSaisie($dateLimiteSaisie);
        $this->assertSame($dateLimiteSaisie, $obj->getDateLimiteSaisie());
    }

    /**
     * Tests setDateSysChangtEx()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysChangtEx(): void {

        // Set a Date/time mock.
        $dateSysChangtEx = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDateSysChangtEx($dateSysChangtEx);
        $this->assertSame($dateSysChangtEx, $obj->getDateSysChangtEx());
    }

    /**
     * Tests setDateSysCloturePeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysCloturePeriode(): void {

        // Set a Date/time mock.
        $dateSysCloturePeriode = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDateSysCloturePeriode($dateSysCloturePeriode);
        $this->assertSame($dateSysCloturePeriode, $obj->getDateSysCloturePeriode());
    }

    /**
     * Tests setDateSysCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysCreation(): void {

        // Set a Date/time mock.
        $dateSysCreation = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDateSysCreation($dateSysCreation);
        $this->assertSame($dateSysCreation, $obj->getDateSysCreation());
    }

    /**
     * Tests setDateTravail()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTravail(): void {

        // Set a Date/time mock.
        $dateTravail = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDateTravail($dateTravail);
        $this->assertSame($dateTravail, $obj->getDateTravail());
    }

    /**
     * Tests setDebutExercice()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExercice(): void {

        // Set a Date/time mock.
        $debutExercice = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDebutExercice($debutExercice);
        $this->assertSame($debutExercice, $obj->getDebutExercice());
    }

    /**
     * Tests setDebutExercice1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutExercice1(): void {

        // Set a Date/time mock.
        $debutExercice1 = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setDebutExercice1($debutExercice1);
        $this->assertSame($debutExercice1, $obj->getDebutExercice1());
    }

    /**
     * Tests setDelaiLimiteSaisie()
     *
     * @return void
     */
    public function testSetDelaiLimiteSaisie(): void {

        $obj = new Dossier1();

        $obj->setDelaiLimiteSaisie(10);
        $this->assertEquals(10, $obj->getDelaiLimiteSaisie());
    }

    /**
     * Tests setDlu()
     *
     * @return void
     */
    public function testSetDlu(): void {

        $obj = new Dossier1();

        $obj->setDlu("dlu");
        $this->assertEquals("dlu", $obj->getDlu());
    }

    /**
     * Tests setDroitCreationTypeCpt1()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt1(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt1("droitCreationTypeCpt1");
        $this->assertEquals("droitCreationTypeCpt1", $obj->getDroitCreationTypeCpt1());
    }

    /**
     * Tests setDroitCreationTypeCpt10()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt10(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt10("droitCreationTypeCpt10");
        $this->assertEquals("droitCreationTypeCpt10", $obj->getDroitCreationTypeCpt10());
    }

    /**
     * Tests setDroitCreationTypeCpt2()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt2(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt2("droitCreationTypeCpt2");
        $this->assertEquals("droitCreationTypeCpt2", $obj->getDroitCreationTypeCpt2());
    }

    /**
     * Tests setDroitCreationTypeCpt3()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt3(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt3("droitCreationTypeCpt3");
        $this->assertEquals("droitCreationTypeCpt3", $obj->getDroitCreationTypeCpt3());
    }

    /**
     * Tests setDroitCreationTypeCpt4()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt4(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt4("droitCreationTypeCpt4");
        $this->assertEquals("droitCreationTypeCpt4", $obj->getDroitCreationTypeCpt4());
    }

    /**
     * Tests setDroitCreationTypeCpt5()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt5(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt5("droitCreationTypeCpt5");
        $this->assertEquals("droitCreationTypeCpt5", $obj->getDroitCreationTypeCpt5());
    }

    /**
     * Tests setDroitCreationTypeCpt6()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt6(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt6("droitCreationTypeCpt6");
        $this->assertEquals("droitCreationTypeCpt6", $obj->getDroitCreationTypeCpt6());
    }

    /**
     * Tests setDroitCreationTypeCpt7()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt7(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt7("droitCreationTypeCpt7");
        $this->assertEquals("droitCreationTypeCpt7", $obj->getDroitCreationTypeCpt7());
    }

    /**
     * Tests setDroitCreationTypeCpt8()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt8(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt8("droitCreationTypeCpt8");
        $this->assertEquals("droitCreationTypeCpt8", $obj->getDroitCreationTypeCpt8());
    }

    /**
     * Tests setDroitCreationTypeCpt9()
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt9(): void {

        $obj = new Dossier1();

        $obj->setDroitCreationTypeCpt9("droitCreationTypeCpt9");
        $this->assertEquals("droitCreationTypeCpt9", $obj->getDroitCreationTypeCpt9());
    }

    /**
     * Tests setDureeExercice()
     *
     * @return void
     */
    public function testSetDureeExercice(): void {

        $obj = new Dossier1();

        $obj->setDureeExercice("dureeExercice");
        $this->assertEquals("dureeExercice", $obj->getDureeExercice());
    }

    /**
     * Tests setDureeExercice1()
     *
     * @return void
     */
    public function testSetDureeExercice1(): void {

        $obj = new Dossier1();

        $obj->setDureeExercice1("dureeExercice1");
        $this->assertEquals("dureeExercice1", $obj->getDureeExercice1());
    }

    /**
     * Tests setEditDateSysteme()
     *
     * @return void
     */
    public function testSetEditDateSysteme(): void {

        $obj = new Dossier1();

        $obj->setEditDateSysteme(true);
        $this->assertEquals(true, $obj->getEditDateSysteme());
    }

    /**
     * Tests setEditPageGarde()
     *
     * @return void
     */
    public function testSetEditPageGarde(): void {

        $obj = new Dossier1();

        $obj->setEditPageGarde(true);
        $this->assertEquals(true, $obj->getEditPageGarde());
    }

    /**
     * Tests setEnseigne()
     *
     * @return void
     */
    public function testSetEnseigne(): void {

        $obj = new Dossier1();

        $obj->setEnseigne("enseigne");
        $this->assertEquals("enseigne", $obj->getEnseigne());
    }

    /**
     * Tests setEuroOuFranc()
     *
     * @return void
     */
    public function testSetEuroOuFranc(): void {

        $obj = new Dossier1();

        $obj->setEuroOuFranc("euroOuFranc");
        $this->assertEquals("euroOuFranc", $obj->getEuroOuFranc());
    }

    /**
     * Tests setFamille1()
     *
     * @return void
     */
    public function testSetFamille1(): void {

        $obj = new Dossier1();

        $obj->setFamille1("famille1");
        $this->assertEquals("famille1", $obj->getFamille1());
    }

    /**
     * Tests setFamille10()
     *
     * @return void
     */
    public function testSetFamille10(): void {

        $obj = new Dossier1();

        $obj->setFamille10("famille10");
        $this->assertEquals("famille10", $obj->getFamille10());
    }

    /**
     * Tests setFamille2()
     *
     * @return void
     */
    public function testSetFamille2(): void {

        $obj = new Dossier1();

        $obj->setFamille2("famille2");
        $this->assertEquals("famille2", $obj->getFamille2());
    }

    /**
     * Tests setFamille3()
     *
     * @return void
     */
    public function testSetFamille3(): void {

        $obj = new Dossier1();

        $obj->setFamille3("famille3");
        $this->assertEquals("famille3", $obj->getFamille3());
    }

    /**
     * Tests setFamille4()
     *
     * @return void
     */
    public function testSetFamille4(): void {

        $obj = new Dossier1();

        $obj->setFamille4("famille4");
        $this->assertEquals("famille4", $obj->getFamille4());
    }

    /**
     * Tests setFamille5()
     *
     * @return void
     */
    public function testSetFamille5(): void {

        $obj = new Dossier1();

        $obj->setFamille5("famille5");
        $this->assertEquals("famille5", $obj->getFamille5());
    }

    /**
     * Tests setFamille6()
     *
     * @return void
     */
    public function testSetFamille6(): void {

        $obj = new Dossier1();

        $obj->setFamille6("famille6");
        $this->assertEquals("famille6", $obj->getFamille6());
    }

    /**
     * Tests setFamille7()
     *
     * @return void
     */
    public function testSetFamille7(): void {

        $obj = new Dossier1();

        $obj->setFamille7("famille7");
        $this->assertEquals("famille7", $obj->getFamille7());
    }

    /**
     * Tests setFamille8()
     *
     * @return void
     */
    public function testSetFamille8(): void {

        $obj = new Dossier1();

        $obj->setFamille8("famille8");
        $this->assertEquals("famille8", $obj->getFamille8());
    }

    /**
     * Tests setFamille9()
     *
     * @return void
     */
    public function testSetFamille9(): void {

        $obj = new Dossier1();

        $obj->setFamille9("famille9");
        $this->assertEquals("famille9", $obj->getFamille9());
    }

    /**
     * Tests setFamilleAnalytique()
     *
     * @return void
     */
    public function testSetFamilleAnalytique(): void {

        $obj = new Dossier1();

        $obj->setFamilleAnalytique("familleAnalytique");
        $this->assertEquals("familleAnalytique", $obj->getFamilleAnalytique());
    }

    /**
     * Tests setFinExercice()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExercice(): void {

        // Set a Date/time mock.
        $finExercice = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setFinExercice($finExercice);
        $this->assertSame($finExercice, $obj->getFinExercice());
    }

    /**
     * Tests setFinExercice1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinExercice1(): void {

        // Set a Date/time mock.
        $finExercice1 = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setFinExercice1($finExercice1);
        $this->assertSame($finExercice1, $obj->getFinExercice1());
    }

    /**
     * Tests setGestionComptaEco()
     *
     * @return void
     */
    public function testSetGestionComptaEco(): void {

        $obj = new Dossier1();

        $obj->setGestionComptaEco(true);
        $this->assertEquals(true, $obj->getGestionComptaEco());
    }

    /**
     * Tests setGroupeAppClients()
     *
     * @return void
     */
    public function testSetGroupeAppClients(): void {

        $obj = new Dossier1();

        $obj->setGroupeAppClients("groupeAppClients");
        $this->assertEquals("groupeAppClients", $obj->getGroupeAppClients());
    }

    /**
     * Tests setLrActive()
     *
     * @return void
     */
    public function testSetLrActive(): void {

        $obj = new Dossier1();

        $obj->setLrActive(true);
        $this->assertEquals(true, $obj->getLrActive());
    }

    /**
     * Tests setLrPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLrPeriode(): void {

        // Set a Date/time mock.
        $lrPeriode = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setLrPeriode($lrPeriode);
        $this->assertSame($lrPeriode, $obj->getLrPeriode());
    }

    /**
     * Tests setModuleAgrActif()
     *
     * @return void
     */
    public function testSetModuleAgrActif(): void {

        $obj = new Dossier1();

        $obj->setModuleAgrActif(true);
        $this->assertEquals(true, $obj->getModuleAgrActif());
    }

    /**
     * Tests setMultiDossiers()
     *
     * @return void
     */
    public function testSetMultiDossiers(): void {

        $obj = new Dossier1();

        $obj->setMultiDossiers(true);
        $this->assertEquals(true, $obj->getMultiDossiers());
    }

    /**
     * Tests setNatureMenu1()
     *
     * @return void
     */
    public function testSetNatureMenu1(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu1("natureMenu1");
        $this->assertEquals("natureMenu1", $obj->getNatureMenu1());
    }

    /**
     * Tests setNatureMenu10()
     *
     * @return void
     */
    public function testSetNatureMenu10(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu10("natureMenu10");
        $this->assertEquals("natureMenu10", $obj->getNatureMenu10());
    }

    /**
     * Tests setNatureMenu2()
     *
     * @return void
     */
    public function testSetNatureMenu2(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu2("natureMenu2");
        $this->assertEquals("natureMenu2", $obj->getNatureMenu2());
    }

    /**
     * Tests setNatureMenu3()
     *
     * @return void
     */
    public function testSetNatureMenu3(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu3("natureMenu3");
        $this->assertEquals("natureMenu3", $obj->getNatureMenu3());
    }

    /**
     * Tests setNatureMenu4()
     *
     * @return void
     */
    public function testSetNatureMenu4(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu4("natureMenu4");
        $this->assertEquals("natureMenu4", $obj->getNatureMenu4());
    }

    /**
     * Tests setNatureMenu5()
     *
     * @return void
     */
    public function testSetNatureMenu5(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu5("natureMenu5");
        $this->assertEquals("natureMenu5", $obj->getNatureMenu5());
    }

    /**
     * Tests setNatureMenu6()
     *
     * @return void
     */
    public function testSetNatureMenu6(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu6("natureMenu6");
        $this->assertEquals("natureMenu6", $obj->getNatureMenu6());
    }

    /**
     * Tests setNatureMenu7()
     *
     * @return void
     */
    public function testSetNatureMenu7(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu7("natureMenu7");
        $this->assertEquals("natureMenu7", $obj->getNatureMenu7());
    }

    /**
     * Tests setNatureMenu8()
     *
     * @return void
     */
    public function testSetNatureMenu8(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu8("natureMenu8");
        $this->assertEquals("natureMenu8", $obj->getNatureMenu8());
    }

    /**
     * Tests setNatureMenu9()
     *
     * @return void
     */
    public function testSetNatureMenu9(): void {

        $obj = new Dossier1();

        $obj->setNatureMenu9("natureMenu9");
        $this->assertEquals("natureMenu9", $obj->getNatureMenu9());
    }

    /**
     * Tests setNatureRegle1()
     *
     * @return void
     */
    public function testSetNatureRegle1(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle1("natureRegle1");
        $this->assertEquals("natureRegle1", $obj->getNatureRegle1());
    }

    /**
     * Tests setNatureRegle10()
     *
     * @return void
     */
    public function testSetNatureRegle10(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle10("natureRegle10");
        $this->assertEquals("natureRegle10", $obj->getNatureRegle10());
    }

    /**
     * Tests setNatureRegle2()
     *
     * @return void
     */
    public function testSetNatureRegle2(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle2("natureRegle2");
        $this->assertEquals("natureRegle2", $obj->getNatureRegle2());
    }

    /**
     * Tests setNatureRegle3()
     *
     * @return void
     */
    public function testSetNatureRegle3(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle3("natureRegle3");
        $this->assertEquals("natureRegle3", $obj->getNatureRegle3());
    }

    /**
     * Tests setNatureRegle4()
     *
     * @return void
     */
    public function testSetNatureRegle4(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle4("natureRegle4");
        $this->assertEquals("natureRegle4", $obj->getNatureRegle4());
    }

    /**
     * Tests setNatureRegle5()
     *
     * @return void
     */
    public function testSetNatureRegle5(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle5("natureRegle5");
        $this->assertEquals("natureRegle5", $obj->getNatureRegle5());
    }

    /**
     * Tests setNatureRegle6()
     *
     * @return void
     */
    public function testSetNatureRegle6(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle6("natureRegle6");
        $this->assertEquals("natureRegle6", $obj->getNatureRegle6());
    }

    /**
     * Tests setNatureRegle7()
     *
     * @return void
     */
    public function testSetNatureRegle7(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle7("natureRegle7");
        $this->assertEquals("natureRegle7", $obj->getNatureRegle7());
    }

    /**
     * Tests setNatureRegle8()
     *
     * @return void
     */
    public function testSetNatureRegle8(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle8("natureRegle8");
        $this->assertEquals("natureRegle8", $obj->getNatureRegle8());
    }

    /**
     * Tests setNatureRegle9()
     *
     * @return void
     */
    public function testSetNatureRegle9(): void {

        $obj = new Dossier1();

        $obj->setNatureRegle9("natureRegle9");
        $this->assertEquals("natureRegle9", $obj->getNatureRegle9());
    }

    /**
     * Tests setNiveauAnalytique()
     *
     * @return void
     */
    public function testSetNiveauAnalytique(): void {

        $obj = new Dossier1();

        $obj->setNiveauAnalytique(10);
        $this->assertEquals(10, $obj->getNiveauAnalytique());
    }

    /**
     * Tests setNiveauDroit1()
     *
     * @return void
     */
    public function testSetNiveauDroit1(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit1("niveauDroit1");
        $this->assertEquals("niveauDroit1", $obj->getNiveauDroit1());
    }

    /**
     * Tests setNiveauDroit10()
     *
     * @return void
     */
    public function testSetNiveauDroit10(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit10("niveauDroit10");
        $this->assertEquals("niveauDroit10", $obj->getNiveauDroit10());
    }

    /**
     * Tests setNiveauDroit2()
     *
     * @return void
     */
    public function testSetNiveauDroit2(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit2("niveauDroit2");
        $this->assertEquals("niveauDroit2", $obj->getNiveauDroit2());
    }

    /**
     * Tests setNiveauDroit3()
     *
     * @return void
     */
    public function testSetNiveauDroit3(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit3("niveauDroit3");
        $this->assertEquals("niveauDroit3", $obj->getNiveauDroit3());
    }

    /**
     * Tests setNiveauDroit4()
     *
     * @return void
     */
    public function testSetNiveauDroit4(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit4("niveauDroit4");
        $this->assertEquals("niveauDroit4", $obj->getNiveauDroit4());
    }

    /**
     * Tests setNiveauDroit5()
     *
     * @return void
     */
    public function testSetNiveauDroit5(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit5("niveauDroit5");
        $this->assertEquals("niveauDroit5", $obj->getNiveauDroit5());
    }

    /**
     * Tests setNiveauDroit6()
     *
     * @return void
     */
    public function testSetNiveauDroit6(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit6("niveauDroit6");
        $this->assertEquals("niveauDroit6", $obj->getNiveauDroit6());
    }

    /**
     * Tests setNiveauDroit7()
     *
     * @return void
     */
    public function testSetNiveauDroit7(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit7("niveauDroit7");
        $this->assertEquals("niveauDroit7", $obj->getNiveauDroit7());
    }

    /**
     * Tests setNiveauDroit8()
     *
     * @return void
     */
    public function testSetNiveauDroit8(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit8("niveauDroit8");
        $this->assertEquals("niveauDroit8", $obj->getNiveauDroit8());
    }

    /**
     * Tests setNiveauDroit9()
     *
     * @return void
     */
    public function testSetNiveauDroit9(): void {

        $obj = new Dossier1();

        $obj->setNiveauDroit9("niveauDroit9");
        $this->assertEquals("niveauDroit9", $obj->getNiveauDroit9());
    }

    /**
     * Tests setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Dossier1();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Dossier1();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Dossier1();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setPasEcritureRb()
     *
     * @return void
     */
    public function testSetPasEcritureRb(): void {

        $obj = new Dossier1();

        $obj->setPasEcritureRb(true);
        $this->assertEquals(true, $obj->getPasEcritureRb());
    }

    /**
     * Tests setPasModifRibRegl()
     *
     * @return void
     */
    public function testSetPasModifRibRegl(): void {

        $obj = new Dossier1();

        $obj->setPasModifRibRegl(true);
        $this->assertEquals(true, $obj->getPasModifRibRegl());
    }

    /**
     * Tests setPeriodeCloturee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeCloturee(): void {

        // Set a Date/time mock.
        $periodeCloturee = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setPeriodeCloturee($periodeCloturee);
        $this->assertSame($periodeCloturee, $obj->getPeriodeCloturee());
    }

    /**
     * Tests setPeriodeValidee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeValidee(): void {

        // Set a Date/time mock.
        $periodeValidee = new DateTime("2018-09-10");

        $obj = new Dossier1();

        $obj->setPeriodeValidee($periodeValidee);
        $this->assertSame($periodeValidee, $obj->getPeriodeValidee());
    }

    /**
     * Tests setProchainNumPiece()
     *
     * @return void
     */
    public function testSetProchainNumPiece(): void {

        $obj = new Dossier1();

        $obj->setProchainNumPiece(10);
        $this->assertEquals(10, $obj->getProchainNumPiece());
    }

    /**
     * Tests setRaisonSociale()
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new Dossier1();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests setRc()
     *
     * @return void
     */
    public function testSetRc(): void {

        $obj = new Dossier1();

        $obj->setRc("rc");
        $this->assertEquals("rc", $obj->getRc());
    }

    /**
     * Tests setSaisieImmoEnEcriture()
     *
     * @return void
     */
    public function testSetSaisieImmoEnEcriture(): void {

        $obj = new Dossier1();

        $obj->setSaisieImmoEnEcriture(true);
        $this->assertEquals(true, $obj->getSaisieImmoEnEcriture());
    }

    /**
     * Tests setSauveCommun()
     *
     * @return void
     */
    public function testSetSauveCommun(): void {

        $obj = new Dossier1();

        $obj->setSauveCommun(true);
        $this->assertEquals(true, $obj->getSauveCommun());
    }

    /**
     * Tests setSauveCompresse()
     *
     * @return void
     */
    public function testSetSauveCompresse(): void {

        $obj = new Dossier1();

        $obj->setSauveCompresse(true);
        $this->assertEquals(true, $obj->getSauveCompresse());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Dossier1();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests setSuiviAffTout()
     *
     * @return void
     */
    public function testSetSuiviAffTout(): void {

        $obj = new Dossier1();

        $obj->setSuiviAffTout(true);
        $this->assertEquals(true, $obj->getSuiviAffTout());
    }

    /**
     * Tests setSuiviAna2()
     *
     * @return void
     */
    public function testSetSuiviAna2(): void {

        $obj = new Dossier1();

        $obj->setSuiviAna2("suiviAna2");
        $this->assertEquals("suiviAna2", $obj->getSuiviAna2());
    }

    /**
     * Tests setSuiviAnaClasse0()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse0(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse0(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse0());
    }

    /**
     * Tests setSuiviAnaClasse1()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse1(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse1(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse1());
    }

    /**
     * Tests setSuiviAnaClasse2()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse2(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse2(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse2());
    }

    /**
     * Tests setSuiviAnaClasse3()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse3(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse3(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse3());
    }

    /**
     * Tests setSuiviAnaClasse4()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse4(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse4(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse4());
    }

    /**
     * Tests setSuiviAnaClasse5()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse5(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse5(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse5());
    }

    /**
     * Tests setSuiviAnaClasse8()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse8(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse8(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse8());
    }

    /**
     * Tests setSuiviAnaClasse9()
     *
     * @return void
     */
    public function testSetSuiviAnaClasse9(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaClasse9(true);
        $this->assertEquals(true, $obj->getSuiviAnaClasse9());
    }

    /**
     * Tests setSuiviAnaFacultatif()
     *
     * @return void
     */
    public function testSetSuiviAnaFacultatif(): void {

        $obj = new Dossier1();

        $obj->setSuiviAnaFacultatif(true);
        $this->assertEquals(true, $obj->getSuiviAnaFacultatif());
    }

    /**
     * Tests setTvaCle()
     *
     * @return void
     */
    public function testSetTvaCle(): void {

        $obj = new Dossier1();

        $obj->setTvaCle("tvaCle");
        $this->assertEquals("tvaCle", $obj->getTvaCle());
    }

    /**
     * Tests setTvaCodeDossier()
     *
     * @return void
     */
    public function testSetTvaCodeDossier(): void {

        $obj = new Dossier1();

        $obj->setTvaCodeDossier("tvaCodeDossier");
        $this->assertEquals("tvaCodeDossier", $obj->getTvaCodeDossier());
    }

    /**
     * Tests setTvaCodeRecette()
     *
     * @return void
     */
    public function testSetTvaCodeRecette(): void {

        $obj = new Dossier1();

        $obj->setTvaCodeRecette("tvaCodeRecette");
        $this->assertEquals("tvaCodeRecette", $obj->getTvaCodeRecette());
    }

    /**
     * Tests setVentilationsCommunes()
     *
     * @return void
     */
    public function testSetVentilationsCommunes(): void {

        $obj = new Dossier1();

        $obj->setVentilationsCommunes(true);
        $this->assertEquals(true, $obj->getVentilationsCommunes());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Dossier1();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCalculAnaFait());
        $this->assertNull($obj->getCheminImplantationAscii());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCleAcces1());
        $this->assertNull($obj->getCleAcces10());
        $this->assertNull($obj->getCleAcces2());
        $this->assertNull($obj->getCleAcces3());
        $this->assertNull($obj->getCleAcces4());
        $this->assertNull($obj->getCleAcces5());
        $this->assertNull($obj->getCleAcces6());
        $this->assertNull($obj->getCleAcces7());
        $this->assertNull($obj->getCleAcces8());
        $this->assertNull($obj->getCleAcces9());
        $this->assertNull($obj->getCleDeblocageJournaux());
        $this->assertNull($obj->getClePortable());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCopieBackup());
        $this->assertNull($obj->getCptDebSuiviClasse0());
        $this->assertNull($obj->getCptDebSuiviClasse1());
        $this->assertNull($obj->getCptDebSuiviClasse2());
        $this->assertNull($obj->getCptDebSuiviClasse3());
        $this->assertNull($obj->getCptDebSuiviClasse4());
        $this->assertNull($obj->getCptDebSuiviClasse5());
        $this->assertNull($obj->getCptDebSuiviClasse8());
        $this->assertNull($obj->getCptDebSuiviClasse9());
        $this->assertNull($obj->getCptFinSuiviClasse0());
        $this->assertNull($obj->getCptFinSuiviClasse1());
        $this->assertNull($obj->getCptFinSuiviClasse2());
        $this->assertNull($obj->getCptFinSuiviClasse3());
        $this->assertNull($obj->getCptFinSuiviClasse4());
        $this->assertNull($obj->getCptFinSuiviClasse5());
        $this->assertNull($obj->getCptFinSuiviClasse8());
        $this->assertNull($obj->getCptFinSuiviClasse9());
        $this->assertNull($obj->getCreateurDossier());
        $this->assertNull($obj->getDlu());
        $this->assertNull($obj->getDateLimiteSaisie());
        $this->assertNull($obj->getDateSysChangtEx());
        $this->assertNull($obj->getDateSysCloturePeriode());
        $this->assertNull($obj->getDateSysCreation());
        $this->assertNull($obj->getDateTravail());
        $this->assertNull($obj->getDebutExercice());
        $this->assertNull($obj->getDebutExercice1());
        $this->assertNull($obj->getDelaiLimiteSaisie());
        $this->assertNull($obj->getDroitCreationTypeCpt1());
        $this->assertNull($obj->getDroitCreationTypeCpt10());
        $this->assertNull($obj->getDroitCreationTypeCpt2());
        $this->assertNull($obj->getDroitCreationTypeCpt3());
        $this->assertNull($obj->getDroitCreationTypeCpt4());
        $this->assertNull($obj->getDroitCreationTypeCpt5());
        $this->assertNull($obj->getDroitCreationTypeCpt6());
        $this->assertNull($obj->getDroitCreationTypeCpt7());
        $this->assertNull($obj->getDroitCreationTypeCpt8());
        $this->assertNull($obj->getDroitCreationTypeCpt9());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getDureeExercice1());
        $this->assertNull($obj->getEditDateSysteme());
        $this->assertNull($obj->getEditPageGarde());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getEuroOuFranc());
        $this->assertNull($obj->getFamille1());
        $this->assertNull($obj->getFamille10());
        $this->assertNull($obj->getFamille2());
        $this->assertNull($obj->getFamille3());
        $this->assertNull($obj->getFamille4());
        $this->assertNull($obj->getFamille5());
        $this->assertNull($obj->getFamille6());
        $this->assertNull($obj->getFamille7());
        $this->assertNull($obj->getFamille8());
        $this->assertNull($obj->getFamille9());
        $this->assertNull($obj->getFamilleAnalytique());
        $this->assertNull($obj->getFinExercice());
        $this->assertNull($obj->getFinExercice1());
        $this->assertNull($obj->getGestionComptaEco());
        $this->assertNull($obj->getGroupeAppClients());
        $this->assertNull($obj->getLrActive());
        $this->assertNull($obj->getLrPeriode());
        $this->assertNull($obj->getModuleAgrActif());
        $this->assertNull($obj->getMultiDossiers());
        $this->assertNull($obj->getNatureMenu1());
        $this->assertNull($obj->getNatureMenu10());
        $this->assertNull($obj->getNatureMenu2());
        $this->assertNull($obj->getNatureMenu3());
        $this->assertNull($obj->getNatureMenu4());
        $this->assertNull($obj->getNatureMenu5());
        $this->assertNull($obj->getNatureMenu6());
        $this->assertNull($obj->getNatureMenu7());
        $this->assertNull($obj->getNatureMenu8());
        $this->assertNull($obj->getNatureMenu9());
        $this->assertNull($obj->getNatureRegle1());
        $this->assertNull($obj->getNatureRegle10());
        $this->assertNull($obj->getNatureRegle2());
        $this->assertNull($obj->getNatureRegle3());
        $this->assertNull($obj->getNatureRegle4());
        $this->assertNull($obj->getNatureRegle5());
        $this->assertNull($obj->getNatureRegle6());
        $this->assertNull($obj->getNatureRegle7());
        $this->assertNull($obj->getNatureRegle8());
        $this->assertNull($obj->getNatureRegle9());
        $this->assertNull($obj->getNiveauAnalytique());
        $this->assertNull($obj->getNiveauDroit1());
        $this->assertNull($obj->getNiveauDroit10());
        $this->assertNull($obj->getNiveauDroit2());
        $this->assertNull($obj->getNiveauDroit3());
        $this->assertNull($obj->getNiveauDroit4());
        $this->assertNull($obj->getNiveauDroit5());
        $this->assertNull($obj->getNiveauDroit6());
        $this->assertNull($obj->getNiveauDroit7());
        $this->assertNull($obj->getNiveauDroit8());
        $this->assertNull($obj->getNiveauDroit9());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getPasEcritureRb());
        $this->assertNull($obj->getPasModifRibRegl());
        $this->assertNull($obj->getPeriodeCloturee());
        $this->assertNull($obj->getPeriodeValidee());
        $this->assertNull($obj->getProchainNumPiece());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getSaisieImmoEnEcriture());
        $this->assertNull($obj->getSauveCommun());
        $this->assertNull($obj->getSauveCompresse());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSuiviAffTout());
        $this->assertNull($obj->getSuiviAna2());
        $this->assertNull($obj->getSuiviAnaClasse0());
        $this->assertNull($obj->getSuiviAnaClasse1());
        $this->assertNull($obj->getSuiviAnaClasse2());
        $this->assertNull($obj->getSuiviAnaClasse3());
        $this->assertNull($obj->getSuiviAnaClasse4());
        $this->assertNull($obj->getSuiviAnaClasse5());
        $this->assertNull($obj->getSuiviAnaClasse8());
        $this->assertNull($obj->getSuiviAnaClasse9());
        $this->assertNull($obj->getSuiviAnaFacultatif());
        $this->assertNull($obj->getTvaCle());
        $this->assertNull($obj->getTvaCodeDossier());
        $this->assertNull($obj->getTvaCodeRecette());
        $this->assertNull($obj->getVentilationsCommunes());
    }
}
