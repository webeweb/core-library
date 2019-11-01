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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAfsiiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCbEnFrancsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMateriauxAgricoleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTaxeFonciereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTaxeProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCrrDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAcquisitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMiseServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTpPremierPaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdAmortAnterieur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdAmortAnterieurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdAnneesAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdCoeffDegressifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDotation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDotationExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDotationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdTauxLineaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfAmortAnterieurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfAnneesAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfCoeffDegressifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfDotationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfTauxExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfTauxLineaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseTaxeProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrpmValueCtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrpmValueLtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrPxCessionHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrQteVendueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrSupplAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrSupplValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrValeurEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLimiteAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTpMonttDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumDeuxImmoRachatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumImmoRachatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTpDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAfTypeTrait;
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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCrrTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGuidVehiculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpEchoirEchuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpMoisAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpPeriodiciteTrait;

/**
 * Credits bails.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CreditsBails {

    use FloatAdAmortAnterieurTrait;
    use FloatAdAmortAnterieur2Trait;
    use FloatAdAnneesAmortTrait;
    use FloatAdCoeffDegressifTrait;
    use FloatAdDotationTrait;
    use FloatAdDotation2Trait;
    use FloatAdDotationExceptTrait;
    use FloatAdDureeTrait;
    use FloatAdTauxLineaireTrait;
    use StringAdTypeTrait;
    use FloatAfAmortAnterieurTrait;
    use FloatAfAnneesAmortTrait;
    use FloatAfCoeffDegressifTrait;
    use FloatAfDotationTrait;
    use FloatAfDureeTrait;
    use BoolAfsiiTrait;
    use FloatAfTauxExceptTrait;
    use FloatAfTauxLineaireTrait;
    use StringAfTypeTrait;
    use FloatBaseTaxeProTrait;
    use StringBureauTrait;
    use BoolCbEnFrancsTrait;
    use DateTimeCrrDateTrait;
    use FloatCrrpmValueCtTrait;
    use FloatCrrpmValueLtTrait;
    use FloatCrrPxCessionHtTrait;
    use FloatCrrQteVendueTrait;
    use FloatCrrSupplAmortTrait;
    use FloatCrrSupplValeurTrait;
    use StringCrrTypeTrait;
    use FloatCrValeurEurosTrait;
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
    use DateTimeDateMiseServiceTrait;
    use StringEtatTrait;
    use StringGuidVehiculeTrait;
    use StringLibelleTrait;
    use StringLibelleFrnTrait;
    use FloatLimiteAmortTrait;
    use BoolMateriauxAgricoleTrait;
    use FloatMontantTvaTrait;
    use StringNatureAnalytiqueTrait;
    use IntNumDeuxImmoRachatTrait;
    use IntNumImmoRachatTrait;
    use IntNumeroTrait;
    use StringNumeroCompteTrait;
    use IntNumeroDeuxTrait;
    use IntNumeroPjTrait;
    use FloatQuantiteTrait;
    use StringServiceTrait;
    use IntTpDureeTrait;
    use StringTpEchoirEchuTrait;
    use StringTpMoisAnneeTrait;
    use FloatTpMonttDepotTrait;
    use StringTpPeriodiciteTrait;
    use DateTimeTpPremierPaiementTrait;
    use BoolTaxeFonciereTrait;
    use BoolTaxeProTrait;
    use FloatValeurEurosTrait;
    use FloatValeurHtTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
