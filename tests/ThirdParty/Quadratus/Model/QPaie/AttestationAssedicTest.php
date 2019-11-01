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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationAssedic;

/**
 * Attestation assedic test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAssedicTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationAssedic();

        $this->assertNull($obj->getAdhesionAides());
        $this->assertNull($obj->getAdhesionRevocable());
        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getAlsaceMoselle());
        $this->assertNull($obj->getAutoAssurance());
        $this->assertNull($obj->getCaisseIndemcp());
        $this->assertNull($obj->getCategEmploiAutre());
        $this->assertNull($obj->getChomageTotal());
        $this->assertNull($obj->getCodeAna());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeP());
        $this->assertNull($obj->getCodeRetraiteAgirc());
        $this->assertNull($obj->getCodeRetraiteArrco());
        $this->assertNull($obj->getCodeRetraiteAutre());
        $this->assertNull($obj->getContratPartAutre());
        $this->assertNull($obj->getContratParticulier());
        $this->assertNull($obj->getConventionFne());
        $this->assertNull($obj->getDateAdhesion());
        $this->assertNull($obj->getDateConventionFne());
        $this->assertNull($obj->getDateNaiss());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDatePaie());
        $this->assertNull($obj->getDatePaie2());
        $this->assertNull($obj->getDatePlan());
        $this->assertNull($obj->getDemandeDdteDeb());
        $this->assertNull($obj->getDemandeDdteFin());
        $this->assertNull($obj->getDemandeDdteReprise());
        $this->assertNull($obj->getDept());
        $this->assertNull($obj->getDernJourTrav());
        $this->assertNull($obj->getDernLieuTravail());
        $this->assertNull($obj->getDernierEmploi());
        $this->assertNull($obj->getDureeEmploi1Deb());
        $this->assertNull($obj->getDureeEmploi1Fin());
        $this->assertNull($obj->getDureeEmploi2Deb());
        $this->assertNull($obj->getDureeEmploi2Fin());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEffectifVal());
        $this->assertNull($obj->getEmploiCollectivite());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblAdresse3());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getFngsaPercevoir());
        $this->assertNull($obj->getFngsaPercevoirCreance());
        $this->assertNull($obj->getFngsNonAPercevoirMotif());
        $this->assertNull($obj->getFngsNonPercueMotif());
        $this->assertNull($obj->getFngsPercue());
        $this->assertNull($obj->getFngsPercueCreance());
        $this->assertNull($obj->getHeuresTrav());
        $this->assertNull($obj->getHeuresTrav2());
        $this->assertNull($obj->getHoraireAnnuelEtbl());
        $this->assertNull($obj->getHoraireAnnuelSal());
        $this->assertNull($obj->getHoraireHebdoEtbl());
        $this->assertNull($obj->getHoraireHebdoSal());
        $this->assertNull($obj->getIndemnAutres());
        $this->assertNull($obj->getIndemnClientele());
        $this->assertNull($obj->getIndemnCompensCp());
        $this->assertNull($obj->getIndemnCompensPreavis());
        $this->assertNull($obj->getIndemnDepartRetraite());
        $this->assertNull($obj->getIndemnDueSinistre());
        $this->assertNull($obj->getIndemnFinCdd());
        $this->assertNull($obj->getIndemnFinCne());
        $this->assertNull($obj->getIndemnFinMission());
        $this->assertNull($obj->getIndemnJournalistes());
        $this->assertNull($obj->getIndemnLicens());
        $this->assertNull($obj->getIndemnNavig());
        $this->assertNull($obj->getIndemnRuptConv());
        $this->assertNull($obj->getIndemnSpeciLicens());
        $this->assertNull($obj->getIndemnSpecifLicens());
        $this->assertNull($obj->getIndemnSupplLicens());
        $this->assertNull($obj->getIndemnVerseeApprenti());
        $this->assertNull($obj->getLicencie55ans());
        $this->assertNull($obj->getLicenciePlanSocial());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifDifference());
        $this->assertNull($obj->getMotifNonPaieIccp());
        $this->assertNull($obj->getMotifNonPaiement());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getMtIdemnConvCol());
        $this->assertNull($obj->getMtIdemnTransac());
        $this->assertNull($obj->getNaf());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNatureContrat());
        $this->assertNull($obj->getNbJoursOuvrables());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNomAssChom());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomSpecialSecu());
        $this->assertNull($obj->getNouvelleAttest());
        $this->assertNull($obj->getNumAssChom());
        $this->assertNull($obj->getNumConventionFne());
        $this->assertNull($obj->getNumConventionGestion());
        $this->assertNull($obj->getNumSpecialSecu());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganismeAssChom());
        $this->assertNull($obj->getPreavisEffectue());
        $this->assertNull($obj->getPreavisEffectueDeb());
        $this->assertNull($obj->getPreavisEffectueFin());
        $this->assertNull($obj->getPreavisEffectuePaye());
        $this->assertNull($obj->getPreavisNonEffectue());
        $this->assertNull($obj->getPreavisNonEffectueDeb());
        $this->assertNull($obj->getPreavisNonEffectueFin());
        $this->assertNull($obj->getPreavisNonEffectuePaye());
        $this->assertNull($obj->getPrecompteStc());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualiteEmploi());
        $this->assertNull($obj->getReclassement());
        $this->assertNull($obj->getRefusSalarie());
        $this->assertNull($obj->getRetraiteAgirc());
        $this->assertNull($obj->getRetraiteAgircCompl());
        $this->assertNull($obj->getRetraiteArrco());
        $this->assertNull($obj->getRetraiteArrcoCompl());
        $this->assertNull($obj->getRetraiteAutre());
        $this->assertNull($obj->getRetraiteAutreCompl());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalaireBrut());
        $this->assertNull($obj->getSignatureCodeQualite());
        $this->assertNull($obj->getSignatureContact());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignaturePrenom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureTel());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getSoldeToutCompte());
        $this->assertNull($obj->getSommesPeriodeDeb());
        $this->assertNull($obj->getSommesPeriodeDeb2());
        $this->assertNull($obj->getSommesPeriodeFin());
        $this->assertNull($obj->getSommesPeriodeFin2());
        $this->assertNull($obj->getSpecialSecu());
        $this->assertNull($obj->getStatut());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getStatutPartAutre());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTotalSommes());
        $this->assertNull($obj->getTransactionEnCours());
        $this->assertNull($obj->getTypeAssedic());
        $this->assertNull($obj->getTypeDiffHoraire());
        $this->assertNull($obj->getTypeSociete());
        $this->assertNull($obj->getUrssaf());
        $this->assertNull($obj->getValiditeConventionFne());
    }
}
