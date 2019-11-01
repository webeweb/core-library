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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFromPointageBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImprimerDansPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPxFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePreparationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodePreparationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresReelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantUnitaireTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixAchatBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUnitairePdfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixUnitaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxHoraireBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoChronoPreparationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLigneOriTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroBtTrait;
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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoPieceOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefPosteCdeWebFtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePieceTrait;

/**
 * Factures lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesLignes {

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
    use FloatCoefficientBtTrait;
    use DateTimeDateBtTrait;
    use DateTimeDatePreparationTrait;
    use BoolDepuisDebFacTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use StringDesignationBisTrait;
    use StringDesignationBis2Trait;
    use StringDesignationBis3Trait;
    use StringDesignationRtfTrait;
    use FloatDureeBtTrait;
    use BoolFromPointageBtTrait;
    use FloatHeuresPrevTrait;
    use FloatHeuresReelTrait;
    use BoolImprimerDansPiedTrait;
    use FloatMontantUnitaireTaxeTrait;
    use StringMotCleDansPiedTrait;
    use IntNoChronoPreparationTrait;
    use IntNoLigneOriTrait;
    use StringNoPieceOrigineTrait;
    use IntNumeroBtTrait;
    use StringNumeroFactureTrait;
    use IntNumeroLigneTrait;
    use DateTimePeriodePreparationTrait;
    use DateTimePeriodeVentilMargeTrait;
    use StringPosteRentTrait;
    use FloatPrixAchatTrait;
    use FloatPrixAchatBtTrait;
    use FloatPrixUnitaireTrait;
    use FloatPrixUnitairePdfTrait;
    use BoolPxFactureTrait;
    use FloatQuantiteTrait;
    use StringRefPosteCdeWebFtTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatTauxHoraireBtTrait;
    use FloatTauxTvaArticleTrait;
    use FloatTauxTvaTaxeTrait;
    use StringTypePieceTrait;
    use BoolVentilMargeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
