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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAdGarderDotSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAfsiiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCrIsDotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCrr151MotifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMajorationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMateriauxAgricoleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPilotageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTaxeFonciereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTaxeProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCrrDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAcqForfaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAcquisitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMiseServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReevalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTpDateOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeVDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdAmortAnterieur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdAmortAnterieurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdAnneesAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdCoeffDegressifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDeductionAmortAnterieurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDeductionDotationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDotation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDotationExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDotationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAdTauxLineaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfAmortAnterieurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfAnneesAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfCoeffDegressifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfDotationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfTauxExceptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAfTauxLineaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatArt151MontantDejaEtaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatArt151MontantEtaleAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseTaxeProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrr151PmValueCtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrr151PmValueLtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrpmValueCtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrpmValueCtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrpmValueLtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrpmValueLtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrPxCessionHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrQteVendueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrSupplAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCrrSupplValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCTauxImpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCValeurEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatLimiteAmortTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurAcqForfaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurBaseAmortissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurDeductionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurHtOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatVncReallocTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntBaseCalculTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEnsembleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumEnsReallocTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntVNumeroDeuxIniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntVNumeroDeuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntVNumeroIniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntVNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdDureeTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAfTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArt151DureeDejaEtaleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArt151DureeEtalementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCrrTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGuidVehiculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleQuantiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbMoisMajorationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptTransDotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDossOrgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVNumeroCompteIniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZoneLibre1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZoneLibre2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZoneLibre3Trait;

/**
 * Immobilisations.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Immobilisations {

    use FloatAdAmortAnterieurTrait;
    use FloatAdAmortAnterieur2Trait;
    use FloatAdAnneesAmortTrait;
    use FloatAdCoeffDegressifTrait;
    use FloatAdDeductionAmortAnterieurTrait;
    use FloatAdDeductionDotationTrait;
    use FloatAdDotationTrait;
    use FloatAdDotation2Trait;
    use FloatAdDotationExceptTrait;
    use FloatAdDureeTrait;
    use StringAdDureeTotTrait;
    use BoolAdGarderDotSaisieTrait;
    use FloatAdQuantiteTrait;
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
    use StringArt151DureeDejaEtaleeTrait;
    use StringArt151DureeEtalementTrait;
    use FloatArt151MontantDejaEtaleTrait;
    use FloatArt151MontantEtaleAnneeTrait;
    use IntBaseCalculTrait;
    use FloatBaseTaxeProTrait;
    use StringBureauTrait;
    use BoolCrIsDotTrait;
    use BoolCrr151MotifTrait;
    use FloatCrr151PmValueCtTrait;
    use FloatCrr151PmValueLtTrait;
    use DateTimeCrrDateTrait;
    use FloatCrrpmValueCtTrait;
    use FloatCrrpmValueCtfTrait;
    use FloatCrrpmValueLtTrait;
    use FloatCrrpmValueLtfTrait;
    use FloatCrrPxCessionHtTrait;
    use FloatCrrQteVendueTrait;
    use FloatCrrSupplAmortTrait;
    use FloatCrrSupplValeurTrait;
    use StringCrrTypeTrait;
    use FloatCTauxImpTrait;
    use FloatCValeurEurosTrait;
    use StringCentreAnalytiqueTrait;
    use StringCodeTvaTrait;
    use StringCompteFrnTrait;
    use BoolDinTrait;
    use DateTimeDateAcqForfaitTrait;
    use DateTimeDateAcquisitionTrait;
    use DateTimeDateMiseServiceTrait;
    use DateTimeDateReevalTrait;
    use StringEtatTrait;
    use StringFamilleTrait;
    use StringGuidVehiculeTrait;
    use StringLibelleTrait;
    use StringLibelleFrnTrait;
    use StringLibelleQuantiteTrait;
    use FloatLimiteAmortTrait;
    use BoolMajorationTrait;
    use BoolMateriauxAgricoleTrait;
    use FloatMontantTvaTrait;
    use StringNatureAnalytiqueTrait;
    use StringNbMoisMajorationTrait;
    use StringNumCptTransDotTrait;
    use StringNumDossOrgTrait;
    use IntNumEnsReallocTrait;
    use IntNumEnsembleTrait;
    use IntNumeroTrait;
    use StringNumeroCompteTrait;
    use IntNumeroDeuxTrait;
    use IntNumeroPjTrait;
    use BoolPilotageTrait;
    use FloatQuantiteTrait;
    use StringServiceTrait;
    use StringSiteTrait;
    use DateTimeTpDateOrigineTrait;
    use FloatTauxTvaTrait;
    use BoolTaxeFonciereTrait;
    use BoolTaxeProTrait;
    use DateTimeVDateTrait;
    use FloatVncReallocTrait;
    use IntVNumeroTrait;
    use StringVNumeroCompteTrait;
    use StringVNumeroCompteIniTrait;
    use IntVNumeroDeuxTrait;
    use IntVNumeroDeuxIniTrait;
    use IntVNumeroIniTrait;
    use FloatValeurAcqForfaitTrait;
    use FloatValeurBaseAmortissementTrait;
    use FloatValeurDeductionTrait;
    use FloatValeurHtTrait;
    use FloatValeurHtOrigineTrait;
    use StringZoneLibre1Trait;
    use StringZoneLibre2Trait;
    use StringZoneLibre3Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
