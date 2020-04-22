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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationCacm;

/**
 * Attestation cacm test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationCacmTest extends AbstractTestCase {

    /**
     * Tests the setAdresseEmploye() method.
     *
     * @return void
     */
    public function testSetAdresseEmploye() {

        $obj = new AttestationCacm();

        $obj->setAdresseEmploye("adresseEmploye");
        $this->assertEquals("adresseEmploye", $obj->getAdresseEmploye());
    }

    /**
     * Tests the setAutreContrat() method.
     *
     * @return void
     */
    public function testSetAutreContrat() {

        $obj = new AttestationCacm();

        $obj->setAutreContrat("autreContrat");
        $this->assertEquals("autreContrat", $obj->getAutreContrat());
    }

    /**
     * Tests the setAutreStatut() method.
     *
     * @return void
     */
    public function testSetAutreStatut() {

        $obj = new AttestationCacm();

        $obj->setAutreStatut("autreStatut");
        $this->assertEquals("autreStatut", $obj->getAutreStatut());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new AttestationCacm();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeMotifRupture() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture() {

        $obj = new AttestationCacm();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new AttestationCacm();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance() {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests the setDateNotification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNotification() {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Tests the setDatePaiement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaiement() {

        // Set a Date/time mock.
        $datePaiement = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDatePaiement($datePaiement);
        $this->assertSame($datePaiement, $obj->getDatePaiement());
    }

    /**
     * Tests the setDernLieuTravail() method.
     *
     * @return void
     */
    public function testSetDernLieuTravail() {

        $obj = new AttestationCacm();

        $obj->setDernLieuTravail("dernLieuTravail");
        $this->assertEquals("dernLieuTravail", $obj->getDernLieuTravail());
    }

    /**
     * Tests the setDernierEmploi() method.
     *
     * @return void
     */
    public function testSetDernierEmploi() {

        $obj = new AttestationCacm();

        $obj->setDernierEmploi("dernierEmploi");
        $this->assertEquals("dernierEmploi", $obj->getDernierEmploi());
    }

    /**
     * Tests the setDtDebPreavisEffectue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPreavisEffectue() {

        // Set a Date/time mock.
        $dtDebPreavisEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDebPreavisEffectue($dtDebPreavisEffectue);
        $this->assertSame($dtDebPreavisEffectue, $obj->getDtDebPreavisEffectue());
    }

    /**
     * Tests the setDtDebPreavisNonEffectue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPreavisNonEffectue() {

        // Set a Date/time mock.
        $dtDebPreavisNonEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDebPreavisNonEffectue($dtDebPreavisNonEffectue);
        $this->assertSame($dtDebPreavisNonEffectue, $obj->getDtDebPreavisNonEffectue());
    }

    /**
     * Tests the setDtDebutEmploi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutEmploi() {

        // Set a Date/time mock.
        $dtDebutEmploi = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDebutEmploi($dtDebutEmploi);
        $this->assertSame($dtDebutEmploi, $obj->getDtDebutEmploi());
    }

    /**
     * Tests the setDtDernJourTrav() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernJourTrav() {

        // Set a Date/time mock.
        $dtDernJourTrav = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDernJourTrav($dtDernJourTrav);
        $this->assertSame($dtDernJourTrav, $obj->getDtDernJourTrav());
    }

    /**
     * Tests the setDtFinEmploi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinEmploi() {

        // Set a Date/time mock.
        $dtFinEmploi = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtFinEmploi($dtFinEmploi);
        $this->assertSame($dtFinEmploi, $obj->getDtFinEmploi());
    }

    /**
     * Tests the setDtFinPreavisEffectue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavisEffectue() {

        // Set a Date/time mock.
        $dtFinPreavisEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtFinPreavisEffectue($dtFinPreavisEffectue);
        $this->assertSame($dtFinPreavisEffectue, $obj->getDtFinPreavisEffectue());
    }

    /**
     * Tests the setDtFinPreavisNonEffectue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavisNonEffectue() {

        // Set a Date/time mock.
        $dtFinPreavisNonEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtFinPreavisNonEffectue($dtFinPreavisNonEffectue);
        $this->assertSame($dtFinPreavisNonEffectue, $obj->getDtFinPreavisNonEffectue());
    }

    /**
     * Tests the setEtblAdr() method.
     *
     * @return void
     */
    public function testSetEtblAdr() {

        $obj = new AttestationCacm();

        $obj->setEtblAdr("etblAdr");
        $this->assertEquals("etblAdr", $obj->getEtblAdr());
    }

    /**
     * Tests the setEtblCacm() method.
     *
     * @return void
     */
    public function testSetEtblCacm() {

        $obj = new AttestationCacm();

        $obj->setEtblCacm("etblCacm");
        $this->assertEquals("etblCacm", $obj->getEtblCacm());
    }

    /**
     * Tests the setEtblEffectif() method.
     *
     * @return void
     */
    public function testSetEtblEffectif() {

        $obj = new AttestationCacm();

        $obj->setEtblEffectif(10);
        $this->assertEquals(10, $obj->getEtblEffectif());
    }

    /**
     * Tests the setEtblFax() method.
     *
     * @return void
     */
    public function testSetEtblFax() {

        $obj = new AttestationCacm();

        $obj->setEtblFax("etblFax");
        $this->assertEquals("etblFax", $obj->getEtblFax());
    }

    /**
     * Tests the setEtblMail() method.
     *
     * @return void
     */
    public function testSetEtblMail() {

        $obj = new AttestationCacm();

        $obj->setEtblMail("etblMail");
        $this->assertEquals("etblMail", $obj->getEtblMail());
    }

    /**
     * Tests the setEtblNaf() method.
     *
     * @return void
     */
    public function testSetEtblNaf() {

        $obj = new AttestationCacm();

        $obj->setEtblNaf("etblNaf");
        $this->assertEquals("etblNaf", $obj->getEtblNaf());
    }

    /**
     * Tests the setEtblSiret() method.
     *
     * @return void
     */
    public function testSetEtblSiret() {

        $obj = new AttestationCacm();

        $obj->setEtblSiret("etblSiret");
        $this->assertEquals("etblSiret", $obj->getEtblSiret());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new AttestationCacm();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setIndemnAutre() method.
     *
     * @return void
     */
    public function testSetIndemnAutre() {

        $obj = new AttestationCacm();

        $obj->setIndemnAutre(true);
        $this->assertEquals(true, $obj->getIndemnAutre());
    }

    /**
     * Tests the setIndemnLegale() method.
     *
     * @return void
     */
    public function testSetIndemnLegale() {

        $obj = new AttestationCacm();

        $obj->setIndemnLegale(true);
        $this->assertEquals(true, $obj->getIndemnLegale());
    }

    /**
     * Tests the setIndemnLic() method.
     *
     * @return void
     */
    public function testSetIndemnLic() {

        $obj = new AttestationCacm();

        $obj->setIndemnLic(true);
        $this->assertEquals(true, $obj->getIndemnLic());
    }

    /**
     * Tests the setIndemnSupp() method.
     *
     * @return void
     */
    public function testSetIndemnSupp() {

        $obj = new AttestationCacm();

        $obj->setIndemnSupp(true);
        $this->assertEquals(true, $obj->getIndemnSupp());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new AttestationCacm();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLienParente() method.
     *
     * @return void
     */
    public function testSetLienParente() {

        $obj = new AttestationCacm();

        $obj->setLienParente(true);
        $this->assertEquals(true, $obj->getLienParente());
    }

    /**
     * Tests the setMotifPreavisNonPaye() method.
     *
     * @return void
     */
    public function testSetMotifPreavisNonPaye() {

        $obj = new AttestationCacm();

        $obj->setMotifPreavisNonPaye("motifPreavisNonPaye");
        $this->assertEquals("motifPreavisNonPaye", $obj->getMotifPreavisNonPaye());
    }

    /**
     * Tests the setMotifRupture() method.
     *
     * @return void
     */
    public function testSetMotifRupture() {

        $obj = new AttestationCacm();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Tests the setMtIndemnAutre() method.
     *
     * @return void
     */
    public function testSetMtIndemnAutre() {

        $obj = new AttestationCacm();

        $obj->setMtIndemnAutre(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnAutre());
    }

    /**
     * Tests the setMtIndemnLegale() method.
     *
     * @return void
     */
    public function testSetMtIndemnLegale() {

        $obj = new AttestationCacm();

        $obj->setMtIndemnLegale(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnLegale());
    }

    /**
     * Tests the setMtIndemnLic() method.
     *
     * @return void
     */
    public function testSetMtIndemnLic() {

        $obj = new AttestationCacm();

        $obj->setMtIndemnLic(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnLic());
    }

    /**
     * Tests the setMtIndemnSupp() method.
     *
     * @return void
     */
    public function testSetMtIndemnSupp() {

        $obj = new AttestationCacm();

        $obj->setMtIndemnSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnSupp());
    }

    /**
     * Tests the setMtSalaireBrut() method.
     *
     * @return void
     */
    public function testSetMtSalaireBrut() {

        $obj = new AttestationCacm();

        $obj->setMtSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalaireBrut());
    }

    /**
     * Tests the setNbHeureMens() method.
     *
     * @return void
     */
    public function testSetNbHeureMens() {

        $obj = new AttestationCacm();

        $obj->setNbHeureMens(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMens());
    }

    /**
     * Tests the setNiveauQualif() method.
     *
     * @return void
     */
    public function testSetNiveauQualif() {

        $obj = new AttestationCacm();

        $obj->setNiveauQualif("niveauQualif");
        $this->assertEquals("niveauQualif", $obj->getNiveauQualif());
    }

    /**
     * Tests the setNoCacm() method.
     *
     * @return void
     */
    public function testSetNoCacm() {

        $obj = new AttestationCacm();

        $obj->setNoCacm("noCacm");
        $this->assertEquals("noCacm", $obj->getNoCacm());
    }

    /**
     * Tests the setNoCssm() method.
     *
     * @return void
     */
    public function testSetNoCssm() {

        $obj = new AttestationCacm();

        $obj->setNoCssm("noCssm");
        $this->assertEquals("noCssm", $obj->getNoCssm());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital() {

        $obj = new AttestationCacm();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance() {

        $obj = new AttestationCacm();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new AttestationCacm();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AttestationCacm();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setOrganismeCacm() method.
     *
     * @return void
     */
    public function testSetOrganismeCacm() {

        $obj = new AttestationCacm();

        $obj->setOrganismeCacm("organismeCacm");
        $this->assertEquals("organismeCacm", $obj->getOrganismeCacm());
    }

    /**
     * Tests the setPeriodeEmploiDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEmploiDeb() {

        // Set a Date/time mock.
        $periodeEmploiDeb = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setPeriodeEmploiDeb($periodeEmploiDeb);
        $this->assertSame($periodeEmploiDeb, $obj->getPeriodeEmploiDeb());
    }

    /**
     * Tests the setPeriodeEmploiFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEmploiFin() {

        // Set a Date/time mock.
        $periodeEmploiFin = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setPeriodeEmploiFin($periodeEmploiFin);
        $this->assertSame($periodeEmploiFin, $obj->getPeriodeEmploiFin());
    }

    /**
     * Tests the setPreavisNonEffectuePaye() method.
     *
     * @return void
     */
    public function testSetPreavisNonEffectuePaye() {

        $obj = new AttestationCacm();

        $obj->setPreavisNonEffectuePaye(true);
        $this->assertEquals(true, $obj->getPreavisNonEffectuePaye());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new AttestationCacm();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setSignAutre() method.
     *
     * @return void
     */
    public function testSetSignAutre() {

        $obj = new AttestationCacm();

        $obj->setSignAutre("signAutre");
        $this->assertEquals("signAutre", $obj->getSignAutre());
    }

    /**
     * Tests the setSignDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignDate() {

        // Set a Date/time mock.
        $signDate = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setSignDate($signDate);
        $this->assertSame($signDate, $obj->getSignDate());
    }

    /**
     * Tests the setSignFormJuridique() method.
     *
     * @return void
     */
    public function testSetSignFormJuridique() {

        $obj = new AttestationCacm();

        $obj->setSignFormJuridique("signFormJuridique");
        $this->assertEquals("signFormJuridique", $obj->getSignFormJuridique());
    }

    /**
     * Tests the setSignMotifRupture() method.
     *
     * @return void
     */
    public function testSetSignMotifRupture() {

        $obj = new AttestationCacm();

        $obj->setSignMotifRupture("signMotifRupture");
        $this->assertEquals("signMotifRupture", $obj->getSignMotifRupture());
    }

    /**
     * Tests the setSignNom() method.
     *
     * @return void
     */
    public function testSetSignNom() {

        $obj = new AttestationCacm();

        $obj->setSignNom("signNom");
        $this->assertEquals("signNom", $obj->getSignNom());
    }

    /**
     * Tests the setSignPrenom() method.
     *
     * @return void
     */
    public function testSetSignPrenom() {

        $obj = new AttestationCacm();

        $obj->setSignPrenom("signPrenom");
        $this->assertEquals("signPrenom", $obj->getSignPrenom());
    }

    /**
     * Tests the setSignQualite() method.
     *
     * @return void
     */
    public function testSetSignQualite() {

        $obj = new AttestationCacm();

        $obj->setSignQualite(10);
        $this->assertEquals(10, $obj->getSignQualite());
    }

    /**
     * Tests the setSignRaisonSociale() method.
     *
     * @return void
     */
    public function testSetSignRaisonSociale() {

        $obj = new AttestationCacm();

        $obj->setSignRaisonSociale("signRaisonSociale");
        $this->assertEquals("signRaisonSociale", $obj->getSignRaisonSociale());
    }

    /**
     * Tests the setStatutCadre() method.
     *
     * @return void
     */
    public function testSetStatutCadre() {

        $obj = new AttestationCacm();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests the setStatutJuridique() method.
     *
     * @return void
     */
    public function testSetStatutJuridique() {

        $obj = new AttestationCacm();

        $obj->setStatutJuridique("statutJuridique");
        $this->assertEquals("statutJuridique", $obj->getStatutJuridique());
    }

    /**
     * Tests the setStatutParticulier() method.
     *
     * @return void
     */
    public function testSetStatutParticulier() {

        $obj = new AttestationCacm();

        $obj->setStatutParticulier(10);
        $this->assertEquals(10, $obj->getStatutParticulier());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new AttestationCacm();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTitreLienParente() method.
     *
     * @return void
     */
    public function testSetTitreLienParente() {

        $obj = new AttestationCacm();

        $obj->setTitreLienParente("titreLienParente");
        $this->assertEquals("titreLienParente", $obj->getTitreLienParente());
    }

    /**
     * Tests the setTypeContrat() method.
     *
     * @return void
     */
    public function testSetTypeContrat() {

        $obj = new AttestationCacm();

        $obj->setTypeContrat(10);
        $this->assertEquals(10, $obj->getTypeContrat());
    }

    /**
     * Tests the setTypeHoraire() method.
     *
     * @return void
     */
    public function testSetTypeHoraire() {

        $obj = new AttestationCacm();

        $obj->setTypeHoraire(10);
        $this->assertEquals(10, $obj->getTypeHoraire());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AttestationCacm();

        $this->assertNull($obj->getAdresseEmploye());
        $this->assertNull($obj->getAutreContrat());
        $this->assertNull($obj->getAutreStatut());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDatePaiement());
        $this->assertNull($obj->getDernLieuTravail());
        $this->assertNull($obj->getDernierEmploi());
        $this->assertNull($obj->getDtDebPreavisEffectue());
        $this->assertNull($obj->getDtDebPreavisNonEffectue());
        $this->assertNull($obj->getDtDebutEmploi());
        $this->assertNull($obj->getDtDernJourTrav());
        $this->assertNull($obj->getDtFinEmploi());
        $this->assertNull($obj->getDtFinPreavisEffectue());
        $this->assertNull($obj->getDtFinPreavisNonEffectue());
        $this->assertNull($obj->getEtblAdr());
        $this->assertNull($obj->getEtblCacm());
        $this->assertNull($obj->getEtblEffectif());
        $this->assertNull($obj->getEtblFax());
        $this->assertNull($obj->getEtblMail());
        $this->assertNull($obj->getEtblNaf());
        $this->assertNull($obj->getEtblSiret());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIndemnAutre());
        $this->assertNull($obj->getIndemnLegale());
        $this->assertNull($obj->getIndemnLic());
        $this->assertNull($obj->getIndemnSupp());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifPreavisNonPaye());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getMtIndemnAutre());
        $this->assertNull($obj->getMtIndemnLegale());
        $this->assertNull($obj->getMtIndemnLic());
        $this->assertNull($obj->getMtIndemnSupp());
        $this->assertNull($obj->getMtSalaireBrut());
        $this->assertNull($obj->getNbHeureMens());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNoCacm());
        $this->assertNull($obj->getNoCssm());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganismeCacm());
        $this->assertNull($obj->getPeriodeEmploiDeb());
        $this->assertNull($obj->getPeriodeEmploiFin());
        $this->assertNull($obj->getPreavisNonEffectuePaye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSignAutre());
        $this->assertNull($obj->getSignDate());
        $this->assertNull($obj->getSignFormJuridique());
        $this->assertNull($obj->getSignMotifRupture());
        $this->assertNull($obj->getSignNom());
        $this->assertNull($obj->getSignPrenom());
        $this->assertNull($obj->getSignQualite());
        $this->assertNull($obj->getSignRaisonSociale());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getStatutJuridique());
        $this->assertNull($obj->getStatutParticulier());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTitreLienParente());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeHoraire());
    }
}
