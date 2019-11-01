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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDepuisDebFacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImprimerDansPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNePasReviserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPrixNetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolProduitChimiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolProduitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPxFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviStockTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVarianteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVentilMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVisuDansAttFiscTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDernierPrixAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantUnitaireTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPampTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixRevientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixVenteEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockMiniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteStockReelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArticleRemplacementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClassificationFourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClassificationUtilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffectRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamilleArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotCleDansPiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteRentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeArticleTrait;

/**
 * Articles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Articles {

    use BoolActifTrait;
    use StringArticleRemplacementTrait;
    use StringClassificationFourTrait;
    use StringClassificationUtilTrait;
    use StringCodeAffectRentTrait;
    use StringCodeAnalAchatTrait;
    use StringCodeAnalVenteTrait;
    use StringCodeArticleTrait;
    use StringCodeFournisseurTrait;
    use StringCodeTvaAchatTrait;
    use StringCodeTvaVenteTrait;
    use StringCodeUniteTrait;
    use StringCodeVentilAchatTrait;
    use StringCodeVentilVenteTrait;
    use FloatCoefTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateModificationTrait;
    use BoolDepuisDebFacTrait;
    use FloatDernierPrixAchatTrait;
    use StringDesignationTrait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use StringDesignationRtfTrait;
    use StringFamilleArticleTrait;
    use BoolImprimerDansPiedTrait;
    use FloatMontantUnitaireTaxeTrait;
    use StringMotCleDansPiedTrait;
    use BoolNePasReviserTrait;
    use StringNombreEcheancesTrait;
    use IntNumeroPjTrait;
    use FloatPampTrait;
    use StringPosteRentTrait;
    use BoolPrixNetTrait;
    use FloatPrixRevientTrait;
    use FloatPrixVenteTrait;
    use FloatPrixVenteEurosTrait;
    use BoolProduitTrait;
    use BoolProduitChimiqueTrait;
    use BoolPxFactureTrait;
    use FloatQteStockMiniTrait;
    use FloatQteStockReelTrait;
    use BoolSoumisEscompteTrait;
    use BoolSuiviStockTrait;
    use FloatTauxEscompteTrait;
    use StringTypeArticleTrait;
    use BoolVarianteTrait;
    use BoolVentilMargeTrait;
    use BoolVisuDansAttFiscTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
