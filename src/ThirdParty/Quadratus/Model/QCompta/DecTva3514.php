<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Bool4HasDiminutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAcompteDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateLimiteDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeExigibleLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float02BaseHt196Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float02TaxeDue196Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float03BaseHt55Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float03TaxeDue55Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float04BaseHt85Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float04TaxeDue85Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float05BaseHt21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float05TaxeDue21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float06BaseHtAncTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float06TaxeDueAncTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float07BaseHtTauxPartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float07TaxeDueTauxPartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float08BaseHttvAaReverserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float08TaxeDueTvAaReverserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float09TotalTvaBruteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float10BiensImmosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float11AutresBiensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float12OmissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float13TotalTvaDeducTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float14ATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float15BTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float16RemboursTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float18CreditTvaca12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float1MttAugmentationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float20AcompteTa1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float20AcompteTa2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float21AcompteTot1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float21AcompteTot2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float2BBaseHt7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float2BTaxeDue7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float2MttCreditPrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float2MttDiminutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float3MttDiminutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Float4MttDiminutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttDetTa1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttDetTa2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttDetTa3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttDetTa4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttDontTaxesAssimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttDontTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0151Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0207Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzHaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Int3SuspensionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDetCodeTaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDetTa1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDetTa2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDetTa3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDetTa4Trait;

/**
 * Dec tva3514.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3514 {

    use Float02BaseHt196Trait;
    use Float02TaxeDue196Trait;
    use Float03BaseHt55Trait;
    use Float03TaxeDue55Trait;
    use Float04BaseHt85Trait;
    use Float04TaxeDue85Trait;
    use Float05BaseHt21Trait;
    use Float05TaxeDue21Trait;
    use Float06BaseHtAncTauxTrait;
    use Float06TaxeDueAncTauxTrait;
    use Float07BaseHtTauxPartTrait;
    use Float07TaxeDueTauxPartTrait;
    use Float08BaseHttvAaReverserTrait;
    use Float08TaxeDueTvAaReverserTrait;
    use Float09TotalTvaBruteTrait;
    use Float10BiensImmosTrait;
    use Float11AutresBiensTrait;
    use Float12OmissionTrait;
    use Float13TotalTvaDeducTrait;
    use Float14ATrait;
    use Float15BTrait;
    use Float16RemboursTvaTrait;
    use Float18CreditTvaca12Trait;
    use Float1MttAugmentationTrait;
    use Float20AcompteTa1Trait;
    use Float20AcompteTa2Trait;
    use Float21AcompteTot1Trait;
    use Float21AcompteTot2Trait;
    use Float2BBaseHt7Trait;
    use Float2BTaxeDue7Trait;
    use Float2MttCreditPrecTrait;
    use Float2MttDiminutionTrait;
    use Float3MttDiminutionTrait;
    use Int3SuspensionTrait;
    use Bool4HasDiminutionTrait;
    use Float4MttDiminutionTrait;
    use DateTimeAcompteDuTrait;
    use DateTimeDateDecTrait;
    use DateTimeDateLimiteDecTrait;
    use StringDetCodeTaTrait;
    use StringDetTa1Trait;
    use StringDetTa2Trait;
    use StringDetTa3Trait;
    use StringDetTa4Trait;
    use DateTimeExigibleLeTrait;
    use FloatMttAPayerTrait;
    use FloatMttDetTa1Trait;
    use FloatMttDetTa2Trait;
    use FloatMttDetTa3Trait;
    use FloatMttDetTa4Trait;
    use FloatMttDontTvaTrait;
    use FloatMttDontTaxesAssimTrait;
    use DateTimePeriodeTrait;
    use Floatz0151Trait;
    use Floatz0207Trait;
    use FloatzHaTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
