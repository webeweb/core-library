<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCum30SsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseCsgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseGmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseSsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTr2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrACaisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrACaisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrACaisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrBCaisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrBCaisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrBCaisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrBTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrCCaisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrCCaisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrCCaisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrD1Caisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrD1Caisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrD1Caisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrD1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrDCaisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrDCaisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrDCaisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBaseTrDTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutAbatNonLimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutAlSansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutAlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutCaisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutCaisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutCaisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumBrutNonAbattuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpDus1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpDusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpPris1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumDifDus1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumDifDusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHBonifieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHeurePayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHeureTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHReposRemplaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHSupRcitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumHSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumJourPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumJourTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumJReposRecupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumMtCpPris1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumMtCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumNetAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumNetImposableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlaf1Caisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlaf1Caisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlaf1Caisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlaf2Caisse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlaf2Caisse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlaf2Caisse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlafondGmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlafondSs1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumPlafondSs2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumProvCp1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumProvCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumReposCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumRttDusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumRttPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTotSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTranche2SansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTranche2SiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheASansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheAsiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheBSansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheBsiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheCSansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheCsiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheD1SansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumTrancheDSansSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Cumuls annee prec.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CumulsAnneePrec {

    use StringAnneeTrait;
    use FloatCum30SsTrait;
    use FloatCumBaseCsgTrait;
    use FloatCumBaseGmpTrait;
    use FloatCumBaseSsTrait;
    use FloatCumBaseTr2Trait;
    use FloatCumBaseTrATrait;
    use FloatCumBaseTrACaisse1Trait;
    use FloatCumBaseTrACaisse2Trait;
    use FloatCumBaseTrACaisse3Trait;
    use FloatCumBaseTrBTrait;
    use FloatCumBaseTrBCaisse1Trait;
    use FloatCumBaseTrBCaisse2Trait;
    use FloatCumBaseTrBCaisse3Trait;
    use FloatCumBaseTrCTrait;
    use FloatCumBaseTrCCaisse1Trait;
    use FloatCumBaseTrCCaisse2Trait;
    use FloatCumBaseTrCCaisse3Trait;
    use FloatCumBaseTrDTrait;
    use FloatCumBaseTrD1Trait;
    use FloatCumBaseTrD1Caisse1Trait;
    use FloatCumBaseTrD1Caisse2Trait;
    use FloatCumBaseTrD1Caisse3Trait;
    use FloatCumBaseTrDCaisse1Trait;
    use FloatCumBaseTrDCaisse2Trait;
    use FloatCumBaseTrDCaisse3Trait;
    use FloatCumBrutAbatNonLimTrait;
    use FloatCumBrutCaisse1Trait;
    use FloatCumBrutCaisse2Trait;
    use FloatCumBrutCaisse3Trait;
    use FloatCumBrutNonAbattuTrait;
    use FloatCumBrutAlTrait;
    use FloatCumBrutAlSansSiTrait;
    use FloatCumCpDusTrait;
    use FloatCumCpDus1Trait;
    use FloatCumCpPrisTrait;
    use FloatCumCpPris1Trait;
    use FloatCumDifDusTrait;
    use FloatCumDifDus1Trait;
    use FloatCumHBonifieTrait;
    use FloatCumHReposRemplaceTrait;
    use FloatCumHServiceTrait;
    use FloatCumHSupTrait;
    use FloatCumHSupRcitTrait;
    use FloatCumHeurePayeTrait;
    use FloatCumHeureTravTrait;
    use FloatCumJReposRecupTrait;
    use FloatCumJourPayeTrait;
    use FloatCumJourTravTrait;
    use FloatCumMtCpPrisTrait;
    use FloatCumMtCpPris1Trait;
    use FloatCumNetAPayerTrait;
    use FloatCumNetImposableTrait;
    use FloatCumPlaf1Caisse1Trait;
    use FloatCumPlaf1Caisse2Trait;
    use FloatCumPlaf1Caisse3Trait;
    use FloatCumPlaf2Caisse1Trait;
    use FloatCumPlaf2Caisse2Trait;
    use FloatCumPlaf2Caisse3Trait;
    use FloatCumPlafondGmpTrait;
    use FloatCumPlafondSs1Trait;
    use FloatCumPlafondSs2Trait;
    use FloatCumProvCpTrait;
    use FloatCumProvCp1Trait;
    use FloatCumReposCompTrait;
    use FloatCumRttDusTrait;
    use FloatCumRttPrisTrait;
    use FloatCumTotSiTrait;
    use FloatCumTranche2SiTrait;
    use FloatCumTranche2SansSiTrait;
    use FloatCumTrancheAsiTrait;
    use FloatCumTrancheASansSiTrait;
    use FloatCumTrancheBsiTrait;
    use FloatCumTrancheBSansSiTrait;
    use FloatCumTrancheCsiTrait;
    use FloatCumTrancheCSansSiTrait;
    use FloatCumTrancheD1SansSiTrait;
    use FloatCumTrancheDSansSiTrait;
    use StringNumeroEmployeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
