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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Etablissements2;

/**
 * Etablissements2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Etablissements2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Etablissements2();

        $this->assertNull($obj->getAdherentSyndicat());
        $this->assertNull($obj->getAnneeChgtEffectif());
        $this->assertNull($obj->getAnneeJei());
        $this->assertNull($obj->getAssujettiCvae());
        $this->assertNull($obj->getAutreSignatureDnae());
        $this->assertNull($obj->getBic2());
        $this->assertNull($obj->getBic3());
        $this->assertNull($obj->getCaisseCpTransport());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMedTravDue());
        $this->assertNull($obj->getCodeOrgaDue());
        $this->assertNull($obj->getCoeffFillonMoins20());
        $this->assertNull($obj->getCompteChargeHeuresActPart());
        $this->assertNull($obj->getCompteChargeIndemAbsIntemp());
        $this->assertNull($obj->getCompteChargeIndemActPart());
        $this->assertNull($obj->getCompteChargeIntVers());
        $this->assertNull($obj->getCompteChargePartVers());
        $this->assertNull($obj->getContactSignatureDnae());
        $this->assertNull($obj->getDateFinExclureLfr2012());
        $this->assertNull($obj->getExclureLfr2012());
        $this->assertNull($obj->getGestionHstepa());
        $this->assertNull($obj->getGestionMaintienSalAuto());
        $this->assertNull($obj->getIban2());
        $this->assertNull($obj->getIban3());
        $this->assertNull($obj->getIbanIdClient2());
        $this->assertNull($obj->getIbanIdClient3());
        $this->assertNull($obj->getImplantationEntreprise());
        $this->assertNull($obj->getJfChargeEmp());
        $this->assertNull($obj->getLieuSignatureDnae());
        $this->assertNull($obj->getMaintienNetDeducCsgijss());
        $this->assertNull($obj->getNbFractionEtab());
        $this->assertNull($obj->getNomSignataireDnae());
        $this->assertNull($obj->getPrenomSignataireDnae());
        $this->assertNull($obj->getPseudoSiret());
        $this->assertNull($obj->getQualiteSignataireDnae());
        $this->assertNull($obj->getReductionMayotte());
        $this->assertNull($obj->getRemunerationExpatries());
        $this->assertNull($obj->getSmicMCourant());
        $this->assertNull($obj->getSiretCentralisateur());
        $this->assertNull($obj->getSocieteInterim());
        $this->assertNull($obj->getTds19());
        $this->assertNull($obj->getTepaMoins20());
        $this->assertNull($obj->getTauxComplHeure());
        $this->assertNull($obj->getTauxCotisOssEtOpe());
        $this->assertNull($obj->getTauxHComp());
        $this->assertNull($obj->getTelSignatureDnae());
        $this->assertNull($obj->getTypeEffectifCt());
        $this->assertNull($obj->getTypeMaintienBrutNet());
    }
}
