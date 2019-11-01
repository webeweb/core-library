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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonTravPrev;

/**
 * Bon trav prev test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonTravPrevTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonTravPrev();

        $this->assertNull($obj->getAdBtbtq());
        $this->assertNull($obj->getAdBtBureauDistributeur());
        $this->assertNull($obj->getAdBtCivilite());
        $this->assertNull($obj->getAdBtCodePays());
        $this->assertNull($obj->getAdBtCodePostal());
        $this->assertNull($obj->getAdBtComplement());
        $this->assertNull($obj->getAdBtNom());
        $this->assertNull($obj->getAdBtNomSuite());
        $this->assertNull($obj->getAdBtNomVoie());
        $this->assertNull($obj->getAdBtNumVoie());
        $this->assertNull($obj->getAdFbtq());
        $this->assertNull($obj->getAdFBureauDistributeur());
        $this->assertNull($obj->getAdFCivilite());
        $this->assertNull($obj->getAdFCodePays());
        $this->assertNull($obj->getAdFCodePostal());
        $this->assertNull($obj->getAdFComplement());
        $this->assertNull($obj->getAdFNom());
        $this->assertNull($obj->getAdFNomSuite());
        $this->assertNull($obj->getAdFNomSuite2());
        $this->assertNull($obj->getAdFNomSuite3());
        $this->assertNull($obj->getAdFNomVoie());
        $this->assertNull($obj->getAdFNumVoie());
        $this->assertNull($obj->getAdresseBtSaisie());
        $this->assertNull($obj->getAdresseFacturationSaisie());
        $this->assertNull($obj->getBtCopie());
        $this->assertNull($obj->getBtDevisDejaFacture());
        $this->assertNull($obj->getBtValide());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeRegroupementDevis());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCritereBool1());
        $this->assertNull($obj->getCritereBool2());
        $this->assertNull($obj->getCritereByte1());
        $this->assertNull($obj->getCritereListe1());
        $this->assertNull($obj->getCritereListe2());
        $this->assertNull($obj->getCritereNumerique1());
        $this->assertNull($obj->getCritereNumerique2());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getCritereTexte2());
        $this->assertNull($obj->getDatePassage());
        $this->assertNull($obj->getDatePremierPassage());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDureePointee());
        $this->assertNull($obj->getDureePrevue());
        $this->assertNull($obj->getDureeValidee());
        $this->assertNull($obj->getEmployeSigneMob());
        $this->assertNull($obj->getGestionPlanning());
        $this->assertNull($obj->getGuidMob());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMontantHtDevis());
        $this->assertNull($obj->getNbJoursPointes());
        $this->assertNull($obj->getNbJoursPrevus());
        $this->assertNull($obj->getNombreEmployes());
        $this->assertNull($obj->getNonTraite());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getObservationClient());
        $this->assertNull($obj->getObservationInterne());
        $this->assertNull($obj->getOccasionnel());
        $this->assertNull($obj->getPlusieursJours());
        $this->assertNull($obj->getPlusieursMois());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getProratise());
        $this->assertNull($obj->getSignataire());
        $this->assertNull($obj->getSigne());
        $this->assertNull($obj->getStartMob());
        $this->assertNull($obj->getTypeBt());
        $this->assertNull($obj->getTypeBtSaisi());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getVia());
        $this->assertNull($obj->getreference1Devis());
        $this->assertNull($obj->getreference2Devis());
    }
}
