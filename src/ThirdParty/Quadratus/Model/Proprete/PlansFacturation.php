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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAouTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNovTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOctTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPxFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRefArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinValiditeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPeriodeTarifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTarifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroHistoriqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationBis2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationBis3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationBisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefPosteCdeWebFtTrait;

/**
 * Plans facturation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlansFacturation {

    use BoolAouTrait;
    use BoolAvrTrait;
    use StringCodeAffaireTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeRegroupementTrait;
    use FloatCoefficientTrait;
    use DateTimeDateFinValiditeTrait;
    use BoolDecTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use StringDesignationBisTrait;
    use StringDesignationBis2Trait;
    use StringDesignationBis3Trait;
    use StringDesignationRtfTrait;
    use FloatDureeTrait;
    use BoolFevTrait;
    use DateTimeFinPeriodeTarifTrait;
    use IntIndiceTrait;
    use BoolJanTrait;
    use BoolJuiTrait;
    use BoolJuinTrait;
    use BoolMaiTrait;
    use BoolMarTrait;
    use BoolNovTrait;
    use IntNumBtTrait;
    use StringNumeroDevisTrait;
    use IntNumeroHistoriqueTrait;
    use BoolOctTrait;
    use DateTimePeriodeTarifTrait;
    use StringPosteRentTrait;
    use FloatPrixAchatTrait;
    use FloatPrixVenteTrait;
    use BoolPxFactureTrait;
    use FloatQuantiteTrait;
    use BoolRefArticleTrait;
    use StringRefPosteCdeWebFtTrait;
    use BoolSepTrait;
    use FloatTauxTrait;
    use BoolVentilMargeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
