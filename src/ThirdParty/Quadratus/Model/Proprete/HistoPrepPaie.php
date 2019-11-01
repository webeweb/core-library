<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolYaEuSaisieManuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatContingentHSupReposCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDroitCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs0Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHabs9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHacpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresRcAcquisesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresRrAcquisesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHs1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHs2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHs35HeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHs3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHSurcroitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatJoursRttAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMensualisationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrime1ChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrime2ChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrime3ChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtPrimeForfaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresRsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbPaniersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime1MaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHComplMajTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHDim2NormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHDimExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHDimNormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHNuit2NormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHNuitExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeHNuitNormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeJf2NormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeJfExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrimeJfNormalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTempsPasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalHAnalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHoraireRsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxHoraireTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntJacpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;

/**
 * Histo prep paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPrepPaie {

    use StringCodeEmployeTrait;
    use FloatContingentHSupReposCompTrait;
    use FloatDroitCpTrait;
    use StringEtatTrait;
    use FloatHabs0Trait;
    use FloatHabs1Trait;
    use FloatHabs2Trait;
    use FloatHabs3Trait;
    use FloatHabs4Trait;
    use FloatHabs5Trait;
    use FloatHabs6Trait;
    use FloatHabs7Trait;
    use FloatHabs8Trait;
    use FloatHabs9Trait;
    use FloatHacpTrait;
    use FloatHcTrait;
    use FloatHPrevTrait;
    use FloatHRemplTrait;
    use FloatHs1Trait;
    use FloatHs2Trait;
    use FloatHs3Trait;
    use FloatHs35HeuresTrait;
    use FloatHSurcroitTrait;
    use FloatHeuresRcAcquisesTrait;
    use FloatHeuresRrAcquisesTrait;
    use IntJacpTrait;
    use FloatJoursRttAcquisTrait;
    use FloatMensualisationTrait;
    use FloatMtPrime1ChantierTrait;
    use FloatMtPrime2ChantierTrait;
    use FloatMtPrime3ChantierTrait;
    use FloatMtPrimeForfaitTrait;
    use FloatNbHeuresRsTrait;
    use FloatNbHeuresTpTrait;
    use FloatNbPaniersTrait;
    use DateTimePeriodeTrait;
    use FloatPrime1Trait;
    use FloatPrime10Trait;
    use FloatPrime1MaiTrait;
    use FloatPrime2Trait;
    use FloatPrime3Trait;
    use FloatPrime4Trait;
    use FloatPrime5Trait;
    use FloatPrime6Trait;
    use FloatPrime7Trait;
    use FloatPrime8Trait;
    use FloatPrime9Trait;
    use FloatPrimeHComplMajTrait;
    use FloatPrimeHDim2NormalTrait;
    use FloatPrimeHDimExceptTrait;
    use FloatPrimeHDimNormalTrait;
    use FloatPrimeHNuit2NormalTrait;
    use FloatPrimeHNuitExceptTrait;
    use FloatPrimeHNuitNormalTrait;
    use FloatPrimeJf2NormalTrait;
    use FloatPrimeJfExceptTrait;
    use FloatPrimeJfNormalTrait;
    use FloatTempsPasseTrait;
    use FloatTotalHAnalTrait;
    use FloatTxHoraireRsTrait;
    use FloatTxHoraireTpTrait;
    use BoolYaEuSaisieManuelleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
