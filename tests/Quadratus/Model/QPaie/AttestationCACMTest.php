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
use WBW\Library\Core\Quadratus\Model\QPaie\AttestationCACM;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Attestation c a c m model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class AttestationCACMTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationCACM();

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
        $this->assertNull($obj->getEtblCACM());
        $this->assertNull($obj->getEtblEffectif());
        $this->assertNull($obj->getEtblFax());
        $this->assertNull($obj->getEtblMail());
        $this->assertNull($obj->getEtblNaf());
        $this->assertNull($obj->getEtblSIRET());
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
        $this->assertNull($obj->getNoCACM());
        $this->assertNull($obj->getNoCSSM());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganismeCACM());
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

    /**
     * Tests the setAdresseEmploye() method.
     *
     * @return void
     */
    public function testSetAdresseEmploye() {

        $obj = new AttestationCACM();

        $obj->setAdresseEmploye("adresseEmploye");
        $this->assertEquals("adresseEmploye", $obj->getAdresseEmploye());
    }

    /**
     * Tests the setAutreContrat() method.
     *
     * @return void
     */
    public function testSetAutreContrat() {

        $obj = new AttestationCACM();

        $obj->setAutreContrat("autreContrat");
        $this->assertEquals("autreContrat", $obj->getAutreContrat());
    }

    /**
     * Tests the setAutreStatut() method.
     *
     * @return void
     */
    public function testSetAutreStatut() {

        $obj = new AttestationCACM();

        $obj->setAutreStatut("autreStatut");
        $this->assertEquals("autreStatut", $obj->getAutreStatut());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new AttestationCACM();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeMotifRupture() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture() {

        $obj = new AttestationCACM();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new AttestationCACM();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     */
    public function testSetDateNaissance() {

        $obj = new AttestationCACM();

        $obj->setDateNaissance(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
    }

    /**
     * Tests the setDateNotification() method.
     *
     * @return void
     */
    public function testSetDateNotification() {

        $obj = new AttestationCACM();

        $obj->setDateNotification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNotification());
    }

    /**
     * Tests the setDatePaiement() method.
     *
     * @return void
     */
    public function testSetDatePaiement() {

        $obj = new AttestationCACM();

        $obj->setDatePaiement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePaiement());
    }

    /**
     * Tests the setDernLieuTravail() method.
     *
     * @return void
     */
    public function testSetDernLieuTravail() {

        $obj = new AttestationCACM();

        $obj->setDernLieuTravail("dernLieuTravail");
        $this->assertEquals("dernLieuTravail", $obj->getDernLieuTravail());
    }

    /**
     * Tests the setDernierEmploi() method.
     *
     * @return void
     */
    public function testSetDernierEmploi() {

        $obj = new AttestationCACM();

        $obj->setDernierEmploi("dernierEmploi");
        $this->assertEquals("dernierEmploi", $obj->getDernierEmploi());
    }

    /**
     * Tests the setDtDebPreavisEffectue() method.
     *
     * @return void
     */
    public function testSetDtDebPreavisEffectue() {

        $obj = new AttestationCACM();

        $obj->setDtDebPreavisEffectue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebPreavisEffectue());
    }

    /**
     * Tests the setDtDebPreavisNonEffectue() method.
     *
     * @return void
     */
    public function testSetDtDebPreavisNonEffectue() {

        $obj = new AttestationCACM();

        $obj->setDtDebPreavisNonEffectue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebPreavisNonEffectue());
    }

    /**
     * Tests the setDtDebutEmploi() method.
     *
     * @return void
     */
    public function testSetDtDebutEmploi() {

        $obj = new AttestationCACM();

        $obj->setDtDebutEmploi(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebutEmploi());
    }

    /**
     * Tests the setDtDernJourTrav() method.
     *
     * @return void
     */
    public function testSetDtDernJourTrav() {

        $obj = new AttestationCACM();

        $obj->setDtDernJourTrav(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDernJourTrav());
    }

    /**
     * Tests the setDtFinEmploi() method.
     *
     * @return void
     */
    public function testSetDtFinEmploi() {

        $obj = new AttestationCACM();

        $obj->setDtFinEmploi(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinEmploi());
    }

    /**
     * Tests the setDtFinPreavisEffectue() method.
     *
     * @return void
     */
    public function testSetDtFinPreavisEffectue() {

        $obj = new AttestationCACM();

        $obj->setDtFinPreavisEffectue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPreavisEffectue());
    }

    /**
     * Tests the setDtFinPreavisNonEffectue() method.
     *
     * @return void
     */
    public function testSetDtFinPreavisNonEffectue() {

        $obj = new AttestationCACM();

        $obj->setDtFinPreavisNonEffectue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPreavisNonEffectue());
    }

    /**
     * Tests the setEtblAdr() method.
     *
     * @return void
     */
    public function testSetEtblAdr() {

        $obj = new AttestationCACM();

        $obj->setEtblAdr("etblAdr");
        $this->assertEquals("etblAdr", $obj->getEtblAdr());
    }

    /**
     * Tests the setEtblCACM() method.
     *
     * @return void
     */
    public function testSetEtblCACM() {

        $obj = new AttestationCACM();

        $obj->setEtblCACM("etblCACM");
        $this->assertEquals("etblCACM", $obj->getEtblCACM());
    }

    /**
     * Tests the setEtblEffectif() method.
     *
     * @return void
     */
    public function testSetEtblEffectif() {

        $obj = new AttestationCACM();

        $obj->setEtblEffectif(10);
        $this->assertEquals(10, $obj->getEtblEffectif());
    }

    /**
     * Tests the setEtblFax() method.
     *
     * @return void
     */
    public function testSetEtblFax() {

        $obj = new AttestationCACM();

        $obj->setEtblFax("etblFax");
        $this->assertEquals("etblFax", $obj->getEtblFax());
    }

    /**
     * Tests the setEtblMail() method.
     *
     * @return void
     */
    public function testSetEtblMail() {

        $obj = new AttestationCACM();

        $obj->setEtblMail("etblMail");
        $this->assertEquals("etblMail", $obj->getEtblMail());
    }

    /**
     * Tests the setEtblNaf() method.
     *
     * @return void
     */
    public function testSetEtblNaf() {

        $obj = new AttestationCACM();

        $obj->setEtblNaf("etblNaf");
        $this->assertEquals("etblNaf", $obj->getEtblNaf());
    }

    /**
     * Tests the setEtblSIRET() method.
     *
     * @return void
     */
    public function testSetEtblSIRET() {

        $obj = new AttestationCACM();

        $obj->setEtblSIRET("etblSIRET");
        $this->assertEquals("etblSIRET", $obj->getEtblSIRET());
    }

    /**
     * Tests the setEtblTel() method.
     *
     * @return void
     */
    public function testSetEtblTel() {

        $obj = new AttestationCACM();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests the setIndemnAutre() method.
     *
     * @return void
     */
    public function testSetIndemnAutre() {

        $obj = new AttestationCACM();

        $obj->setIndemnAutre(true);
        $this->assertEquals(true, $obj->getIndemnAutre());
    }

    /**
     * Tests the setIndemnLegale() method.
     *
     * @return void
     */
    public function testSetIndemnLegale() {

        $obj = new AttestationCACM();

        $obj->setIndemnLegale(true);
        $this->assertEquals(true, $obj->getIndemnLegale());
    }

    /**
     * Tests the setIndemnLic() method.
     *
     * @return void
     */
    public function testSetIndemnLic() {

        $obj = new AttestationCACM();

        $obj->setIndemnLic(true);
        $this->assertEquals(true, $obj->getIndemnLic());
    }

    /**
     * Tests the setIndemnSupp() method.
     *
     * @return void
     */
    public function testSetIndemnSupp() {

        $obj = new AttestationCACM();

        $obj->setIndemnSupp(true);
        $this->assertEquals(true, $obj->getIndemnSupp());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new AttestationCACM();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLienParente() method.
     *
     * @return void
     */
    public function testSetLienParente() {

        $obj = new AttestationCACM();

        $obj->setLienParente(true);
        $this->assertEquals(true, $obj->getLienParente());
    }

    /**
     * Tests the setMotifPreavisNonPaye() method.
     *
     * @return void
     */
    public function testSetMotifPreavisNonPaye() {

        $obj = new AttestationCACM();

        $obj->setMotifPreavisNonPaye("motifPreavisNonPaye");
        $this->assertEquals("motifPreavisNonPaye", $obj->getMotifPreavisNonPaye());
    }

    /**
     * Tests the setMotifRupture() method.
     *
     * @return void
     */
    public function testSetMotifRupture() {

        $obj = new AttestationCACM();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Tests the setMtIndemnAutre() method.
     *
     * @return void
     */
    public function testSetMtIndemnAutre() {

        $obj = new AttestationCACM();

        $obj->setMtIndemnAutre(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnAutre());
    }

    /**
     * Tests the setMtIndemnLegale() method.
     *
     * @return void
     */
    public function testSetMtIndemnLegale() {

        $obj = new AttestationCACM();

        $obj->setMtIndemnLegale(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnLegale());
    }

    /**
     * Tests the setMtIndemnLic() method.
     *
     * @return void
     */
    public function testSetMtIndemnLic() {

        $obj = new AttestationCACM();

        $obj->setMtIndemnLic(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnLic());
    }

    /**
     * Tests the setMtIndemnSupp() method.
     *
     * @return void
     */
    public function testSetMtIndemnSupp() {

        $obj = new AttestationCACM();

        $obj->setMtIndemnSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnSupp());
    }

    /**
     * Tests the setMtSalaireBrut() method.
     *
     * @return void
     */
    public function testSetMtSalaireBrut() {

        $obj = new AttestationCACM();

        $obj->setMtSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalaireBrut());
    }

    /**
     * Tests the setNbHeureMens() method.
     *
     * @return void
     */
    public function testSetNbHeureMens() {

        $obj = new AttestationCACM();

        $obj->setNbHeureMens(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMens());
    }

    /**
     * Tests the setNiveauQualif() method.
     *
     * @return void
     */
    public function testSetNiveauQualif() {

        $obj = new AttestationCACM();

        $obj->setNiveauQualif("niveauQualif");
        $this->assertEquals("niveauQualif", $obj->getNiveauQualif());
    }

    /**
     * Tests the setNoCACM() method.
     *
     * @return void
     */
    public function testSetNoCACM() {

        $obj = new AttestationCACM();

        $obj->setNoCACM("noCACM");
        $this->assertEquals("noCACM", $obj->getNoCACM());
    }

    /**
     * Tests the setNoCSSM() method.
     *
     * @return void
     */
    public function testSetNoCSSM() {

        $obj = new AttestationCACM();

        $obj->setNoCSSM("noCSSM");
        $this->assertEquals("noCSSM", $obj->getNoCSSM());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital() {

        $obj = new AttestationCACM();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance() {

        $obj = new AttestationCACM();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new AttestationCACM();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new AttestationCACM();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setOrganismeCACM() method.
     *
     * @return void
     */
    public function testSetOrganismeCACM() {

        $obj = new AttestationCACM();

        $obj->setOrganismeCACM("organismeCACM");
        $this->assertEquals("organismeCACM", $obj->getOrganismeCACM());
    }

    /**
     * Tests the setPeriodeEmploiDeb() method.
     *
     * @return void
     */
    public function testSetPeriodeEmploiDeb() {

        $obj = new AttestationCACM();

        $obj->setPeriodeEmploiDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEmploiDeb());
    }

    /**
     * Tests the setPeriodeEmploiFin() method.
     *
     * @return void
     */
    public function testSetPeriodeEmploiFin() {

        $obj = new AttestationCACM();

        $obj->setPeriodeEmploiFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEmploiFin());
    }

    /**
     * Tests the setPreavisNonEffectuePaye() method.
     *
     * @return void
     */
    public function testSetPreavisNonEffectuePaye() {

        $obj = new AttestationCACM();

        $obj->setPreavisNonEffectuePaye(true);
        $this->assertEquals(true, $obj->getPreavisNonEffectuePaye());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new AttestationCACM();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setSignAutre() method.
     *
     * @return void
     */
    public function testSetSignAutre() {

        $obj = new AttestationCACM();

        $obj->setSignAutre("signAutre");
        $this->assertEquals("signAutre", $obj->getSignAutre());
    }

    /**
     * Tests the setSignDate() method.
     *
     * @return void
     */
    public function testSetSignDate() {

        $obj = new AttestationCACM();

        $obj->setSignDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getSignDate());
    }

    /**
     * Tests the setSignFormJuridique() method.
     *
     * @return void
     */
    public function testSetSignFormJuridique() {

        $obj = new AttestationCACM();

        $obj->setSignFormJuridique("signFormJuridique");
        $this->assertEquals("signFormJuridique", $obj->getSignFormJuridique());
    }

    /**
     * Tests the setSignMotifRupture() method.
     *
     * @return void
     */
    public function testSetSignMotifRupture() {

        $obj = new AttestationCACM();

        $obj->setSignMotifRupture("signMotifRupture");
        $this->assertEquals("signMotifRupture", $obj->getSignMotifRupture());
    }

    /**
     * Tests the setSignNom() method.
     *
     * @return void
     */
    public function testSetSignNom() {

        $obj = new AttestationCACM();

        $obj->setSignNom("signNom");
        $this->assertEquals("signNom", $obj->getSignNom());
    }

    /**
     * Tests the setSignPrenom() method.
     *
     * @return void
     */
    public function testSetSignPrenom() {

        $obj = new AttestationCACM();

        $obj->setSignPrenom("signPrenom");
        $this->assertEquals("signPrenom", $obj->getSignPrenom());
    }

    /**
     * Tests the setSignQualite() method.
     *
     * @return void
     */
    public function testSetSignQualite() {

        $obj = new AttestationCACM();

        $obj->setSignQualite(10);
        $this->assertEquals(10, $obj->getSignQualite());
    }

    /**
     * Tests the setSignRaisonSociale() method.
     *
     * @return void
     */
    public function testSetSignRaisonSociale() {

        $obj = new AttestationCACM();

        $obj->setSignRaisonSociale("signRaisonSociale");
        $this->assertEquals("signRaisonSociale", $obj->getSignRaisonSociale());
    }

    /**
     * Tests the setStatutCadre() method.
     *
     * @return void
     */
    public function testSetStatutCadre() {

        $obj = new AttestationCACM();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests the setStatutJuridique() method.
     *
     * @return void
     */
    public function testSetStatutJuridique() {

        $obj = new AttestationCACM();

        $obj->setStatutJuridique("statutJuridique");
        $this->assertEquals("statutJuridique", $obj->getStatutJuridique());
    }

    /**
     * Tests the setStatutParticulier() method.
     *
     * @return void
     */
    public function testSetStatutParticulier() {

        $obj = new AttestationCACM();

        $obj->setStatutParticulier(10);
        $this->assertEquals(10, $obj->getStatutParticulier());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new AttestationCACM();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTitreLienParente() method.
     *
     * @return void
     */
    public function testSetTitreLienParente() {

        $obj = new AttestationCACM();

        $obj->setTitreLienParente("titreLienParente");
        $this->assertEquals("titreLienParente", $obj->getTitreLienParente());
    }

    /**
     * Tests the setTypeContrat() method.
     *
     * @return void
     */
    public function testSetTypeContrat() {

        $obj = new AttestationCACM();

        $obj->setTypeContrat(10);
        $this->assertEquals(10, $obj->getTypeContrat());
    }

    /**
     * Tests the setTypeHoraire() method.
     *
     * @return void
     */
    public function testSetTypeHoraire() {

        $obj = new AttestationCACM();

        $obj->setTypeHoraire(10);
        $this->assertEquals(10, $obj->getTypeHoraire());
    }

}
