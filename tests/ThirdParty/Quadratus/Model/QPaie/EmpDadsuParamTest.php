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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuParam;

/**
 * Emp dadsu param test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuParamTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDadsuParam();

        $this->assertNull($obj->getActionsGratuitesNbre());
        $this->assertNull($obj->getActionsGratuitesValeurU());
        $this->assertNull($obj->getAnciennete());
        $this->assertNull($obj->getAncienneteBtp());
        $this->assertNull($obj->getAnneePrepa());
        $this->assertNull($obj->getAtBureau());
        $this->assertNull($obj->getAtEtab());
        $this->assertNull($obj->getAtRisque());
        $this->assertNull($obj->getAtTaux());
        $this->assertNull($obj->getAutresSommesExoCode1());
        $this->assertNull($obj->getAutresSommesExoCode2());
        $this->assertNull($obj->getAutresSommesExoCode3());
        $this->assertNull($obj->getAutresSommesExoCode4());
        $this->assertNull($obj->getAutresSommesExoMnt1());
        $this->assertNull($obj->getAutresSommesExoMnt2());
        $this->assertNull($obj->getAutresSommesExoMnt3());
        $this->assertNull($obj->getAutresSommesExoMnt4());
        $this->assertNull($obj->getBtqLieuTrav());
        $this->assertNull($obj->getBaseExoBrut1());
        $this->assertNull($obj->getBaseExoBrut2());
        $this->assertNull($obj->getBaseExoBrut3());
        $this->assertNull($obj->getBaseExoPlaf1());
        $this->assertNull($obj->getBaseExoPlaf2());
        $this->assertNull($obj->getBaseExoPlaf3());
        $this->assertNull($obj->getBureauDistributeurLieuTrav());
        $this->assertNull($obj->getCategorieBtp());
        $this->assertNull($obj->getCodeCaract());
        $this->assertNull($obj->getCodeClasseCnbf());
        $this->assertNull($obj->getCodeContratTrav());
        $this->assertNull($obj->getCodeConventionCol());
        $this->assertNull($obj->getCodeDecalagePaie());
        $this->assertNull($obj->getCodeDelegGestRisqueMaladie());
        $this->assertNull($obj->getCodeDroitContrat());
        $this->assertNull($obj->getCodeEmplMult());
        $this->assertNull($obj->getCodeEmploisMult());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeEtatContratPrud());
        $this->assertNull($obj->getCodeExtensionAlsaceMoselle());
        $this->assertNull($obj->getCodeInseeLieuTrav());
        $this->assertNull($obj->getCodeMotifDebPer());
        $this->assertNull($obj->getCodeMotifDebPer2());
        $this->assertNull($obj->getCodeMotifDebPer3());
        $this->assertNull($obj->getCodeMotifDebPer4());
        $this->assertNull($obj->getCodeMotifDebPer5());
        $this->assertNull($obj->getCodeMotifFinPer());
        $this->assertNull($obj->getCodeMotifFinPer2());
        $this->assertNull($obj->getCodeMotifFinPer3());
        $this->assertNull($obj->getCodeMotifFinPer4());
        $this->assertNull($obj->getCodeMotifFinPer5());
        $this->assertNull($obj->getCodeNatureBaseCotisations());
        $this->assertNull($obj->getCodeOfficielCommuneLieuTrav());
        $this->assertNull($obj->getCodePostalLieuTrav());
        $this->assertNull($obj->getCodeRegime1());
        $this->assertNull($obj->getCodeRegime2());
        $this->assertNull($obj->getCodeRegime3());
        $this->assertNull($obj->getCodeRegimeBtp());
        $this->assertNull($obj->getCodeRegimeBaseObl());
        $this->assertNull($obj->getCodeRegimeBaseOblAt());
        $this->assertNull($obj->getCodeRegimeBaseOblMaladie());
        $this->assertNull($obj->getCodeRegimeBaseOblVieilPat());
        $this->assertNull($obj->getCodeRegimeBaseOblVieilSal());
        $this->assertNull($obj->getCodeStatutCateg());
        $this->assertNull($obj->getCodeStatutCategConv());
        $this->assertNull($obj->getCodeStatutCategIrc());
        $this->assertNull($obj->getCodeStatutPro());
        $this->assertNull($obj->getCodeTypeExo1());
        $this->assertNull($obj->getCodeTypeExo2());
        $this->assertNull($obj->getCodeTypeExo3());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getComplementLieuTrav());
        $this->assertNull($obj->getDadsuConjointSalarie());
        $this->assertNull($obj->getDadsuNbOptions());
        $this->assertNull($obj->getDadsuPrixSouscriptOpt());
        $this->assertNull($obj->getDadsuValeurAction());
        $this->assertNull($obj->getDateCtrlNorme());
        $this->assertNull($obj->getDateCtrlNormeBtp());
        $this->assertNull($obj->getDateCtrlNormePrev());
        $this->assertNull($obj->getDateCtrlNormeRet());
        $this->assertNull($obj->getDebutPeriodeDecl());
        $this->assertNull($obj->getEchelon());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEpargneSalCode1());
        $this->assertNull($obj->getEpargneSalCode2());
        $this->assertNull($obj->getEpargneSalCode3());
        $this->assertNull($obj->getEpargneSalCode4());
        $this->assertNull($obj->getEpargneSalMnt1());
        $this->assertNull($obj->getEpargneSalMnt2());
        $this->assertNull($obj->getEpargneSalMnt3());
        $this->assertNull($obj->getEpargneSalMnt4());
        $this->assertNull($obj->getEtatCtrlNorme());
        $this->assertNull($obj->getEtatCtrlNormeBtp());
        $this->assertNull($obj->getEtatCtrlNormePrev());
        $this->assertNull($obj->getEtatCtrlNormeRet());
        $this->assertNull($obj->getExoAgff());
        $this->assertNull($obj->getFinPeriodeDecl());
        $this->assertNull($obj->getGpecMntExoCsgcrds());
        $this->assertNull($obj->getGpecMntExoCotSecu());
        $this->assertNull($obj->getIndemnCpPlaf());
        $this->assertNull($obj->getIndemnRuptureCode1());
        $this->assertNull($obj->getIndemnRuptureCode2());
        $this->assertNull($obj->getIndemnRuptureMnt1());
        $this->assertNull($obj->getIndemnRuptureMnt2());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getNbPeriodiciteIrcantec());
        $this->assertNull($obj->getNbhEtabBtp());
        $this->assertNull($obj->getNbhSalBtp());
        $this->assertNull($obj->getNicEtabAffectation());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomVilleInseeLieuTrav());
        $this->assertNull($obj->getNomVilleLieuTrav());
        $this->assertNull($obj->getNomVoieLieuTrav());
        $this->assertNull($obj->getNumVoieLieuTrav());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroAdhesionBtp());
        $this->assertNull($obj->getNumeroAffilFnc());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getNumeroRattach1());
        $this->assertNull($obj->getNumeroRattach2());
        $this->assertNull($obj->getNumeroRattach3());
        $this->assertNull($obj->getNumeroRattachBtp());
        $this->assertNull($obj->getParticipPatronAvtgeCode1());
        $this->assertNull($obj->getParticipPatronAvtgeCode2());
        $this->assertNull($obj->getParticipPatronAvtgeMnt1());
        $this->assertNull($obj->getParticipPatronAvtgeMnt2());
        $this->assertNull($obj->getPeriodiciteIrcantec());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getPourcentAct());
        $this->assertNull($obj->getRemunMedecins());
        $this->assertNull($obj->getSiretLieuTrav());
        $this->assertNull($obj->getStatutCotisantBtp());
        $this->assertNull($obj->getSupplFam());
        $this->assertNull($obj->getTds59());
        $this->assertNull($obj->getTypeAffilBtp());
    }
}
