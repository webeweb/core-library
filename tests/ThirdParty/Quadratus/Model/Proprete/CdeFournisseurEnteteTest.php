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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CdeFournisseurEntete;

/**
 * Cde fournisseur entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CdeFournisseurEnteteTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq() {

        $obj = new CdeFournisseurEntete();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBtq2() method.
     *
     * @return void
     */
    public function testSetBtq2() {

        $obj = new CdeFournisseurEntete();

        $obj->setBtq2("btq2");
        $this->assertEquals("btq2", $obj->getBtq2());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new CdeFournisseurEntete();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setBureauDistributeur2() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur2() {

        $obj = new CdeFournisseurEntete();

        $obj->setBureauDistributeur2("bureauDistributeur2");
        $this->assertEquals("bureauDistributeur2", $obj->getBureauDistributeur2());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCodeLivraison() method.
     *
     * @return void
     */
    public function testSetCodeLivraison() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodeOfficielCommune2() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune2() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeOfficielCommune2("codeOfficielCommune2");
        $this->assertEquals("codeOfficielCommune2", $obj->getCodeOfficielCommune2());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodePostal2() method.
     *
     * @return void
     */
    public function testSetCodePostal2() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodePostal2("codePostal2");
        $this->assertEquals("codePostal2", $obj->getCodePostal2());
    }

    /**
     * Tests the setCodeReglement() method.
     *
     * @return void
     */
    public function testSetCodeReglement() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new CdeFournisseurEntete();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new CdeFournisseurEntete();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setComplement2() method.
     *
     * @return void
     */
    public function testSetComplement2() {

        $obj = new CdeFournisseurEntete();

        $obj->setComplement2("complement2");
        $this->assertEquals("complement2", $obj->getComplement2());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new CdeFournisseurEntete();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateEcheance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance() {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new CdeFournisseurEntete();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new CdeFournisseurEntete();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDatePiece() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePiece() {

        // Set a Date/time mock.
        $datePiece = new DateTime("2018-09-10");

        $obj = new CdeFournisseurEntete();

        $obj->setDatePiece($datePiece);
        $this->assertSame($datePiece, $obj->getDatePiece());
    }

    /**
     * Tests the setDateReceptionPrevue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReceptionPrevue() {

        // Set a Date/time mock.
        $dateReceptionPrevue = new DateTime("2018-09-10");

        $obj = new CdeFournisseurEntete();

        $obj->setDateReceptionPrevue($dateReceptionPrevue);
        $this->assertSame($dateReceptionPrevue, $obj->getDateReceptionPrevue());
    }

    /**
     * Tests the setEcheanceForcee() method.
     *
     * @return void
     */
    public function testSetEcheanceForcee() {

        $obj = new CdeFournisseurEntete();

        $obj->setEcheanceForcee(true);
        $this->assertEquals(true, $obj->getEcheanceForcee());
    }

    /**
     * Tests the setEdition() method.
     *
     * @return void
     */
    public function testSetEdition() {

        $obj = new CdeFournisseurEntete();

        $obj->setEdition(10);
        $this->assertEquals(10, $obj->getEdition());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros() {

        $obj = new CdeFournisseurEntete();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setMontantAcompte() method.
     *
     * @return void
     */
    public function testSetMontantAcompte() {

        $obj = new CdeFournisseurEntete();

        $obj->setMontantAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAcompte());
    }

    /**
     * Tests the setNbColis() method.
     *
     * @return void
     */
    public function testSetNbColis() {

        $obj = new CdeFournisseurEntete();

        $obj->setNbColis(10);
        $this->assertEquals(10, $obj->getNbColis());
    }

    /**
     * Tests the setNoPiece() method.
     *
     * @return void
     */
    public function testSetNoPiece() {

        $obj = new CdeFournisseurEntete();

        $obj->setNoPiece("noPiece");
        $this->assertEquals("noPiece", $obj->getNoPiece());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new CdeFournisseurEntete();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNom2() method.
     *
     * @return void
     */
    public function testSetNom2() {

        $obj = new CdeFournisseurEntete();

        $obj->setNom2("nom2");
        $this->assertEquals("nom2", $obj->getNom2());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite() {

        $obj = new CdeFournisseurEntete();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuite2() method.
     *
     * @return void
     */
    public function testSetNomSuite2() {

        $obj = new CdeFournisseurEntete();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new CdeFournisseurEntete();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVille2() method.
     *
     * @return void
     */
    public function testSetNomVille2() {

        $obj = new CdeFournisseurEntete();

        $obj->setNomVille2("nomVille2");
        $this->assertEquals("nomVille2", $obj->getNomVille2());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new CdeFournisseurEntete();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNomVoie2() method.
     *
     * @return void
     */
    public function testSetNomVoie2() {

        $obj = new CdeFournisseurEntete();

        $obj->setNomVoie2("nomVoie2");
        $this->assertEquals("nomVoie2", $obj->getNomVoie2());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new CdeFournisseurEntete();

        $obj->setNombreEcheances(10);
        $this->assertEquals(10, $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new CdeFournisseurEntete();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumVoie2() method.
     *
     * @return void
     */
    public function testSetNumVoie2() {

        $obj = new CdeFournisseurEntete();

        $obj->setNumVoie2("numVoie2");
        $this->assertEquals("numVoie2", $obj->getNumVoie2());
    }

    /**
     * Tests the setPaiementDepartLe() method.
     *
     * @return void
     */
    public function testSetPaiementDepartLe() {

        $obj = new CdeFournisseurEntete();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Tests the setPaiementLe() method.
     *
     * @return void
     */
    public function testSetPaiementLe() {

        $obj = new CdeFournisseurEntete();

        $obj->setPaiementLe(10);
        $this->assertEquals(10, $obj->getPaiementLe());
    }

    /**
     * Tests the setPaiementNombreDeJours() method.
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours() {

        $obj = new CdeFournisseurEntete();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests the setPeriodePreparation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePreparation() {

        // Set a Date/time mock.
        $periodePreparation = new DateTime("2018-09-10");

        $obj = new CdeFournisseurEntete();

        $obj->setPeriodePreparation($periodePreparation);
        $this->assertSame($periodePreparation, $obj->getPeriodePreparation());
    }

    /**
     * Tests the setPoids() method.
     *
     * @return void
     */
    public function testSetPoids() {

        $obj = new CdeFournisseurEntete();

        $obj->setPoids(10.092018);
        $this->assertEquals(10.092018, $obj->getPoids());
    }

    /**
     * Tests the setReference1() method.
     *
     * @return void
     */
    public function testSetReference1() {

        $obj = new CdeFournisseurEntete();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }

    /**
     * Tests the setReference2() method.
     *
     * @return void
     */
    public function testSetReference2() {

        $obj = new CdeFournisseurEntete();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }

    /**
     * Tests the setReference3() method.
     *
     * @return void
     */
    public function testSetReference3() {

        $obj = new CdeFournisseurEntete();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }

    /**
     * Tests the setReference4() method.
     *
     * @return void
     */
    public function testSetReference4() {

        $obj = new CdeFournisseurEntete();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }

    /**
     * Tests the setRemisePied() method.
     *
     * @return void
     */
    public function testSetRemisePied() {

        $obj = new CdeFournisseurEntete();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests the setRemisePied2() method.
     *
     * @return void
     */
    public function testSetRemisePied2() {

        $obj = new CdeFournisseurEntete();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests the setRemisePied3() method.
     *
     * @return void
     */
    public function testSetRemisePied3() {

        $obj = new CdeFournisseurEntete();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests the setSaisirAdresse() method.
     *
     * @return void
     */
    public function testSetSaisirAdresse() {

        $obj = new CdeFournisseurEntete();

        $obj->setSaisirAdresse(true);
        $this->assertEquals(true, $obj->getSaisirAdresse());
    }

    /**
     * Tests the setSaisirAdresseLivraison() method.
     *
     * @return void
     */
    public function testSetSaisirAdresseLivraison() {

        $obj = new CdeFournisseurEntete();

        $obj->setSaisirAdresseLivraison(true);
        $this->assertEquals(true, $obj->getSaisirAdresseLivraison());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new CdeFournisseurEntete();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setSoumisTaxe1() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe1() {

        $obj = new CdeFournisseurEntete();

        $obj->setSoumisTaxe1(true);
        $this->assertEquals(true, $obj->getSoumisTaxe1());
    }

    /**
     * Tests the setSoumisTaxe2() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe2() {

        $obj = new CdeFournisseurEntete();

        $obj->setSoumisTaxe2(true);
        $this->assertEquals(true, $obj->getSoumisTaxe2());
    }

    /**
     * Tests the setSoumisTaxe3() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe3() {

        $obj = new CdeFournisseurEntete();

        $obj->setSoumisTaxe3(true);
        $this->assertEquals(true, $obj->getSoumisTaxe3());
    }

    /**
     * Tests the setTauxDevise() method.
     *
     * @return void
     */
    public function testSetTauxDevise() {

        $obj = new CdeFournisseurEntete();

        $obj->setTauxDevise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDevise());
    }

    /**
     * Tests the setTransfert() method.
     *
     * @return void
     */
    public function testSetTransfert() {

        $obj = new CdeFournisseurEntete();

        $obj->setTransfert(10);
        $this->assertEquals(10, $obj->getTransfert());
    }

    /**
     * Tests the setTransporteur() method.
     *
     * @return void
     */
    public function testSetTransporteur() {

        $obj = new CdeFournisseurEntete();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests the setTxEscompteAchat() method.
     *
     * @return void
     */
    public function testSetTxEscompteAchat() {

        $obj = new CdeFournisseurEntete();

        $obj->setTxEscompteAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTxEscompteAchat());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CdeFournisseurEntete();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtq2());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeur2());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodeOfficielCommune2());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostal2());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplement2());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDatePiece());
        $this->assertNull($obj->getDateReceptionPrevue());
        $this->assertNull($obj->getEcheanceForcee());
        $this->assertNull($obj->getEdition());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getMontantAcompte());
        $this->assertNull($obj->getNbColis());
        $this->assertNull($obj->getNoPiece());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNom2());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVille2());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoie2());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoie2());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPeriodePreparation());
        $this->assertNull($obj->getPoids());
        $this->assertNull($obj->getReference1());
        $this->assertNull($obj->getReference2());
        $this->assertNull($obj->getReference3());
        $this->assertNull($obj->getReference4());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSaisirAdresse());
        $this->assertNull($obj->getSaisirAdresseLivraison());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getTauxDevise());
        $this->assertNull($obj->getTransfert());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTxEscompteAchat());
    }
}
