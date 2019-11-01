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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationIjss;

/**
 * Attestation ijss test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationIjssTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationIjss();

        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getCasGeneral());
        $this->assertNull($obj->getCasParticulier());
        $this->assertNull($obj->getCategorieSal());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDebutPaternite());
        $this->assertNull($obj->getDateDernJMens());
        $this->assertNull($obj->getDateNaissanceEmploye());
        $this->assertNull($obj->getDateNaissanceEnfant());
        $this->assertNull($obj->getDernJ());
        $this->assertNull($obj->getDispenseTravail());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblAdresse3());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntituleCompte());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMaladie());
        $this->assertNull($obj->getMaternite());
        $this->assertNull($obj->getMatricule());
        $this->assertNull($obj->getMontantGeneral());
        $this->assertNull($obj->getMontantParticulier());
        $this->assertNull($obj->getMtCgEuroOuFranc());
        $this->assertNull($obj->getMtCpEuroOuFranc());
        $this->assertNull($obj->getMtSalBrutMoins150H());
        $this->assertNull($obj->getMtSalBrutMoins600H());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbEnfantsACharge());
        $this->assertNull($obj->getNbHCasPart());
        $this->assertNull($obj->getNbHGeneral());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNonRepris());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPaiementEnEuro());
        $this->assertNull($obj->getPaternite());
        $this->assertNull($obj->getPeriodeAu());
        $this->assertNull($obj->getPeriodeDu());
        $this->assertNull($obj->getPeriodeSubrAu());
        $this->assertNull($obj->getPeriodeSubrDu());
        $this->assertNull($obj->getPlusde200h());
        $this->assertNull($obj->getPlusde800h());
        $this->assertNull($obj->getPrenomEmploye());
        $this->assertNull($obj->getRectificative());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getRepriseMotifMed());
        $this->assertNull($obj->getRepriseRaisonPers());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getSituation());
        $this->assertNull($obj->getSubrogationConstantes());
        $this->assertNull($obj->getSubrogationMontant());
        $this->assertNull($obj->getSubrogationPartielle());
        $this->assertNull($obj->getSuspensionDate());
        $this->assertNull($obj->getSuspensionMotif());
        $this->assertNull($obj->getTravailTemp());
        $this->assertNull($obj->getTypeAttestation());
    }
}
