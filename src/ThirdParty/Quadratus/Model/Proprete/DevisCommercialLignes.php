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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDepuisDebFacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImprimerDansPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPxDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantUnitaireTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUnitaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationBis2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationBis3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationBisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotCleDansPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;

/**
 * Devis commercial lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisCommercialLignes {

    use StringCodeAffaireTrait;
    use StringCodeAffaireLigneTrait;
    use StringCodeAnalArticleTrait;
    use StringCodeArticleTrait;
    use StringCodeChantierTrait;
    use StringCodeChantierLigneTrait;
    use StringCodeClientTrait;
    use StringCodeRegroupementTrait;
    use StringCodeTvaArticleTrait;
    use StringCodeUniteTrait;
    use StringCodeVentilArticleTrait;
    use BoolDepuisDebFacTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use StringDesignationBisTrait;
    use StringDesignationBis2Trait;
    use StringDesignationBis3Trait;
    use StringDesignationRtfTrait;
    use BoolImprimerDansPiedTrait;
    use FloatMontantUnitaireTaxeTrait;
    use StringMotCleDansPiedTrait;
    use StringNumeroDevisTrait;
    use IntNumeroLigneTrait;
    use DateTimePeriodeVentilMargeTrait;
    use StringPosteRentTrait;
    use FloatPrixAchatTrait;
    use FloatPrixUnitaireTrait;
    use BoolPxDevisTrait;
    use FloatQuantiteTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatTauxTvaArticleTrait;
    use FloatTauxTvaTaxeTrait;
    use BoolVentilMargeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
