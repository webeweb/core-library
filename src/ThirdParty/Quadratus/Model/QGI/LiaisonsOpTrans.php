<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUseDtDernXFerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerActivitesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerArticlesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerBoniMaliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerBudgetsTempsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCivilitesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCliDocsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCollabTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerContenuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCptaAllTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCptaCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCptaFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCptaImgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCrDsiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCrDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCrPediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCrReqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCrTdfcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCrTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerCstPxKmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerDosCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerDosPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerEdGrpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerFactEditDelSrcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerFactEditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerFactNonEditDelSrcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerFactNonEditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerFonctionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerImpotsDirectsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerIntNoCliOnlyTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerIntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMisCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMissionPrincipaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgDelSrcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgHistCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgHistDelSrcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgHistTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerMsgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerObligationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerPdfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerPlanningTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerPreFactCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerPreFactColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerPreFactFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerPreFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerQInfosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerQualifiantsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerReglementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerSuiCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerTachesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerTpsCliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerTpsColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerTpsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerTypeEvenementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolXFerTypeSocietesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDernXFerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBatchApresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBatchAvantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringListeDestinatairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliA1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliA2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliETrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCliPTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCptaDestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCptaLstDcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerCptaSrcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerLstCabsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringXFerQInfosDetTrait;

/**
 * Liaisons op trans.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsOpTrans {

    use StringBatchApresTrait;
    use StringBatchAvantTrait;
    use StringCodeTrait;
    use DateTimeDtDernXFerTrait;
    use StringIntituleTrait;
    use StringListeDestinatairesTrait;
    use BoolUseDtDernXFerTrait;
    use BoolXFerActivitesTrait;
    use BoolXFerArticlesTrait;
    use BoolXFerBoniMaliTrait;
    use BoolXFerBudgetsTempsTrait;
    use BoolXFerCivilitesTrait;
    use BoolXFerCliTrait;
    use StringXFerCliA1Trait;
    use StringXFerCliA2Trait;
    use StringXFerCliCTrait;
    use StringXFerCliDebTrait;
    use BoolXFerCliDocsTrait;
    use StringXFerCliETrait;
    use StringXFerCliFinTrait;
    use StringXFerCliPTrait;
    use BoolXFerColTrait;
    use BoolXFerCollabTacheTrait;
    use BoolXFerContenuTrait;
    use BoolXFerCptaTrait;
    use BoolXFerCptaAllTrait;
    use BoolXFerCptaCliTrait;
    use StringXFerCptaDestTrait;
    use BoolXFerCptaFrnTrait;
    use BoolXFerCptaImgTrait;
    use StringXFerCptaLstDcTrait;
    use StringXFerCptaSrcTrait;
    use BoolXFerCrDsiTrait;
    use BoolXFerCrDucsTrait;
    use BoolXFerCrPediTrait;
    use BoolXFerCrReqTrait;
    use BoolXFerCrTdfcTrait;
    use BoolXFerCrTvaTrait;
    use BoolXFerCstPxKmTrait;
    use BoolXFerDosCptaTrait;
    use BoolXFerDosPaieTrait;
    use BoolXFerEtebacTrait;
    use BoolXFerEdGrpTrait;
    use BoolXFerFactEditTrait;
    use BoolXFerFactEditDelSrcTrait;
    use BoolXFerFactNonEditTrait;
    use BoolXFerFactNonEditDelSrcTrait;
    use BoolXFerFonctionsTrait;
    use BoolXFerImpotsDirectsTrait;
    use BoolXFerIntTrait;
    use BoolXFerIntNoCliOnlyTrait;
    use StringXFerLstCabsTrait;
    use BoolXFerMisTrait;
    use BoolXFerMisCliTrait;
    use BoolXFerMissionPrincipaleTrait;
    use BoolXFerMsgTrait;
    use BoolXFerMsgCliTrait;
    use BoolXFerMsgColTrait;
    use BoolXFerMsgDelSrcTrait;
    use BoolXFerMsgHistTrait;
    use BoolXFerMsgHistCliTrait;
    use BoolXFerMsgHistDelSrcTrait;
    use BoolXFerObligationsTrait;
    use BoolXFerPdfTrait;
    use BoolXFerPlanningTrait;
    use BoolXFerPreFactTrait;
    use BoolXFerPreFactCliTrait;
    use BoolXFerPreFactColTrait;
    use BoolXFerPreFactFactTrait;
    use BoolXFerQInfosTrait;
    use StringXFerQInfosDetTrait;
    use BoolXFerQualifiantsTrait;
    use BoolXFerReglementsTrait;
    use BoolXFerSuiCliTrait;
    use BoolXFerTachesTrait;
    use BoolXFerTpsTrait;
    use BoolXFerTpsCliTrait;
    use BoolXFerTpsColTrait;
    use BoolXFerTypeEvenementsTrait;
    use BoolXFerTypeSocietesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
