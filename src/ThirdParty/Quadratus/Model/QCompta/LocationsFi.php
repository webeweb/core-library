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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMateriauxAgricoleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTaxeProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAcquisitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMiseServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTpPremierPaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTpMonttDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurLocativeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTpDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalPaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptEntretienTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptTvaAssuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGuidVehiculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpEchoirEchuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpMoisAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpPeriodiciteTrait;

/**
 * Locations fi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFi {

    use StringBureauTrait;
    use StringCentreAnalytiqueTrait;
    use StringCodeJournalEcheanceTrait;
    use StringCodeJournalPaiementTrait;
    use StringCodeTvaTrait;
    use StringCompteFrnTrait;
    use StringCptAssuranceTrait;
    use StringCptChargeTrait;
    use StringCptEntretienTrait;
    use StringCptTvaTrait;
    use StringCptTvaAssuTrait;
    use BoolDinTrait;
    use DateTimeDateAcquisitionTrait;
    use DateTimeDateFinContratTrait;
    use DateTimeDateMiseServiceTrait;
    use StringGuidVehiculeTrait;
    use StringLibelleTrait;
    use StringLibelleFrnTrait;
    use BoolMateriauxAgricoleTrait;
    use FloatMontantTvaTrait;
    use IntNumeroTrait;
    use StringNumeroCompteTrait;
    use IntNumeroPjTrait;
    use FloatQuantiteTrait;
    use StringServiceTrait;
    use IntTpDureeTrait;
    use StringTpEchoirEchuTrait;
    use StringTpMoisAnneeTrait;
    use FloatTpMonttDepotTrait;
    use StringTpPeriodiciteTrait;
    use DateTimeTpPremierPaiementTrait;
    use BoolTaxeProTrait;
    use FloatValeurHtTrait;
    use FloatValeurLocativeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
