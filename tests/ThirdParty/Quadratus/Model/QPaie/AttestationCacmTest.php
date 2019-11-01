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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
