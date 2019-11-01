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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Employes2;

/**
 * Employes2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Employes2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Employes2();

        $this->assertNull($obj->getADeclarerCp());
        $this->assertNull($obj->getAenLogement());
        $this->assertNull($obj->getActiveSmic());
        $this->assertNull($obj->getActiveSalMinConv());
        $this->assertNull($obj->getAllegParticulierEmp());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getAutreAllegEmp());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCiePlus50());
        $this->assertNull($obj->getCodeAnalytiqueProprete());
        $this->assertNull($obj->getCodeEmpRemplace());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeMotifRupture1());
        $this->assertNull($obj->getCodeMotifRupture2());
        $this->assertNull($obj->getCodePaysResidence());
        $this->assertNull($obj->getCodeTuteur());
        $this->assertNull($obj->getCoeffConvention());
        $this->assertNull($obj->getCommercial());
        $this->assertNull($obj->getComplementPcs());
        $this->assertNull($obj->getConjointExploitant());
        $this->assertNull($obj->getContratCne());
        $this->assertNull($obj->getCotisBasePenibilite());
        $this->assertNull($obj->getCritereTriAbsConges1());
        $this->assertNull($obj->getCritereTriAbsConges2());
        $this->assertNull($obj->getCritereTriAbsConges3());
        $this->assertNull($obj->getCumBaseTr2());
        $this->assertNull($obj->getCumBaseTrD());
        $this->assertNull($obj->getCumBaseTrD1());
        $this->assertNull($obj->getCumBaseTrD1Caisse1());
        $this->assertNull($obj->getCumBaseTrD1Caisse2());
        $this->assertNull($obj->getCumBaseTrD1Caisse3());
        $this->assertNull($obj->getCumBaseTrDCaisse1());
        $this->assertNull($obj->getCumBaseTrDCaisse2());
        $this->assertNull($obj->getCumBaseTrDCaisse3());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumDifDus());
        $this->assertNull($obj->getCumDifDus1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getDadsuConjointSalarie());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateFinExclureLfr2012());
        $this->assertNull($obj->getDateFinPortabilite());
        $this->assertNull($obj->getDatePassageCdi());
        $this->assertNull($obj->getDateRenouvCdd());
        $this->assertNull($obj->getDeductionAnc());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEdHSupBonifQueMajo());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEtatIPaie());
        $this->assertNull($obj->getExclureCice());
        $this->assertNull($obj->getExclureChomCdd());
        $this->assertNull($obj->getExclureCospar());
        $this->assertNull($obj->getExclureCotAssedicParUrssaf());
        $this->assertNull($obj->getExclureDas());
        $this->assertNull($obj->getExclureDsn());
        $this->assertNull($obj->getExclureLfr2012());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getExclureLoiTepaPartP());
        $this->assertNull($obj->getExclureLoiTepaPartS());
        $this->assertNull($obj->getExclureQgc());
        $this->assertNull($obj->getExoAccre17());
        $this->assertNull($obj->getExoAgff());
        $this->assertNull($obj->getExoOccasionnelMsa());
        $this->assertNull($obj->getExoProfessionnalisation());
        $this->assertNull($obj->getExoSpecif());
        $this->assertNull($obj->getForfaitHeure());
        $this->assertNull($obj->getForfaitJour());
        $this->assertNull($obj->getGestionCp());
        $this->assertNull($obj->getGestionCompteurHCompleter());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getGestionRtt());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getHeuresPeriodeInitial());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIndemCpMsa());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getInspecteur());
        $this->assertNull($obj->getInterimIndemCpFillon());
        $this->assertNull($obj->getMailBulletinPwd());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienNetDeducCsgijss());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMajoProfessionnalisation());
        $this->assertNull($obj->getMandataireSocial());
        $this->assertNull($obj->getModeleBulletin());
        $this->assertNull($obj->getMoisClotureDif());
        $this->assertNull($obj->getMotifCdd());
        $this->assertNull($obj->getMotifExclusionDsn());
        $this->assertNull($obj->getMultiEmployeur());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbJourCpSup());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbHBonifie());
        $this->assertNull($obj->getNbHContingent());
        $this->assertNull($obj->getNbHJour1());
        $this->assertNull($obj->getNbHJour2());
        $this->assertNull($obj->getNbHJour3());
        $this->assertNull($obj->getNbHJour4());
        $this->assertNull($obj->getNbHJour5());
        $this->assertNull($obj->getNbHJour6());
        $this->assertNull($obj->getNbHJour7());
        $this->assertNull($obj->getNbJourAnnee());
        $this->assertNull($obj->getNbPieceLogement());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomVilleInsee());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAbattementContratMsa());
        $this->assertNull($obj->getNumeroContrat());
        $this->assertNull($obj->getNumeroEmployeContrat());
        $this->assertNull($obj->getPasGestionDif());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPaysNat());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPourcentExo());
        $this->assertNull($obj->getRtt1());
        $this->assertNull($obj->getRtt10());
        $this->assertNull($obj->getRtt11());
        $this->assertNull($obj->getRtt12());
        $this->assertNull($obj->getRtt2());
        $this->assertNull($obj->getRtt3());
        $this->assertNull($obj->getRtt4());
        $this->assertNull($obj->getRtt5());
        $this->assertNull($obj->getRtt6());
        $this->assertNull($obj->getRtt7());
        $this->assertNull($obj->getRtt8());
        $this->assertNull($obj->getRtt9());
        $this->assertNull($obj->getRbtNavigoNonProratise());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getReductionMayotte());
        $this->assertNull($obj->getRemunPartFillon());
        $this->assertNull($obj->getSansContrat());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getTds142());
        $this->assertNull($obj->getTdsAllocChom());
        $this->assertNull($obj->getTdsAllocRetraite());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTravailleurDeNuit());
        $this->assertNull($obj->getTypeAboNavigo());
        $this->assertNull($obj->getTypeExoLodeom());
        $this->assertNull($obj->getTypeIntemperieBtp());
        $this->assertNull($obj->getTypeMaintienBrutNet());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getZoneNavigo());
    }
}
