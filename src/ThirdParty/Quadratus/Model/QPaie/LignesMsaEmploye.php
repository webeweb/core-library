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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoAgircTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoCddcdiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoCrcca36Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoCrcca4BisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEvoFiscTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDeb1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDeb2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDeb3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerFin1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerFin2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerFin3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeTravPrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSmicRetenu1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSmicRetenu2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSmicRetenu3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeures3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSmicFillon1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSmicFillon2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxSmicFillon3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant23Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant24Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant31Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant32Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant33Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontant34Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre23Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre24Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre31Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre32Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre33Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMontantAutre34Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJours1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJours2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJours3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPCentPartielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTotalGeneralTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAgircEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAgircTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCadreEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCddcdiEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCddcdiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollegePrudPrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollegePrudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSectionPrudPrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSectionPrudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCoeffEmploiEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCoeffEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContratEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFiscEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFiscTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHEquivalencePrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHEquivalenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuTravailEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmploye2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodicitePrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSaisonnierPrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSaisonnierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSuspensionZrrzru1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSuspensionZrrzru2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSuspensionZrrzru3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTempsPartielEvoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTempsPartielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAbsenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun23Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun24Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun31Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun32Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun33Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAutreRemun34Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCrccaEmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun23Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun24Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun31Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun32Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun33Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemun34Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTravailTrait;

/**
 * Lignes msa employe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMsaEmploye {

    use StringAgircTrait;
    use StringAgircEvoTrait;
    use StringCddcdiTrait;
    use StringCddcdiEvoTrait;
    use StringCadreTrait;
    use StringCadreEvoTrait;
    use StringCodeCollegePrudTrait;
    use StringCodeCollegePrudPrecTrait;
    use IntCodeEtablissementTrait;
    use StringCodeSectionPrudTrait;
    use StringCodeSectionPrudPrecTrait;
    use StringCodeUniteTrait;
    use StringCoeffEmploiTrait;
    use StringCoeffEmploiEvoTrait;
    use StringCommentairesTrait;
    use StringContratTrait;
    use StringContratEvoTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateEvoTrait;
    use DateTimeDateSortieTrait;
    use DateTimeDtDebAbsTrait;
    use DateTimeDtFinAbsTrait;
    use FloatDureeTravTrait;
    use FloatDureeTravPrecTrait;
    use StringEmploiTrait;
    use StringEmploiEvoTrait;
    use BoolEvoAgircTrait;
    use BoolEvoCddcdiTrait;
    use BoolEvoCrcca36Trait;
    use BoolEvoCrcca4BisTrait;
    use BoolEvoCadreTrait;
    use BoolEvoContratTrait;
    use BoolEvoEmploiTrait;
    use BoolEvoFiscTrait;
    use StringFiscTrait;
    use StringFiscEvoTrait;
    use StringHEquivalenceTrait;
    use StringHEquivalencePrecTrait;
    use StringLieuTravailTrait;
    use StringLieuTravailEvoTrait;
    use IntMontant11Trait;
    use IntMontant12Trait;
    use IntMontant13Trait;
    use IntMontant14Trait;
    use IntMontant21Trait;
    use IntMontant22Trait;
    use IntMontant23Trait;
    use IntMontant24Trait;
    use IntMontant31Trait;
    use IntMontant32Trait;
    use IntMontant33Trait;
    use IntMontant34Trait;
    use IntMontantAutre11Trait;
    use IntMontantAutre12Trait;
    use IntMontantAutre13Trait;
    use IntMontantAutre14Trait;
    use IntMontantAutre21Trait;
    use IntMontantAutre22Trait;
    use IntMontantAutre23Trait;
    use IntMontantAutre24Trait;
    use IntMontantAutre31Trait;
    use IntMontantAutre32Trait;
    use IntMontantAutre33Trait;
    use IntMontantAutre34Trait;
    use FloatMontantSmicRetenu1Trait;
    use FloatMontantSmicRetenu2Trait;
    use FloatMontantSmicRetenu3Trait;
    use StringNirTrait;
    use FloatNbHeures1Trait;
    use FloatNbHeures2Trait;
    use FloatNbHeures3Trait;
    use IntNbJours1Trait;
    use IntNbJours2Trait;
    use IntNbJours3Trait;
    use StringNomEmployeTrait;
    use StringNumeroEmployeTrait;
    use StringNumeroEmploye2Trait;
    use IntPCentPartielTrait;
    use DateTimePerDeb1Trait;
    use DateTimePerDeb2Trait;
    use DateTimePerDeb3Trait;
    use DateTimePerFin1Trait;
    use DateTimePerFin2Trait;
    use DateTimePerFin3Trait;
    use DateTimePeriodeDeclaTrait;
    use StringPeriodiciteTrait;
    use StringPeriodicitePrecTrait;
    use StringPrenomEmployeTrait;
    use StringSaisonnierTrait;
    use StringSaisonnierPrecTrait;
    use StringServiceTrait;
    use StringServiceEvoTrait;
    use StringSuspensionZrrzru1Trait;
    use StringSuspensionZrrzru2Trait;
    use StringSuspensionZrrzru3Trait;
    use FloatTauxSmicFillon1Trait;
    use FloatTauxSmicFillon2Trait;
    use FloatTauxSmicFillon3Trait;
    use StringTempsPartielTrait;
    use StringTempsPartielEvoTrait;
    use IntTotalGeneralTrait;
    use StringTypeAbsenceTrait;
    use StringTypeAutreRemun11Trait;
    use StringTypeAutreRemun12Trait;
    use StringTypeAutreRemun13Trait;
    use StringTypeAutreRemun14Trait;
    use StringTypeAutreRemun21Trait;
    use StringTypeAutreRemun22Trait;
    use StringTypeAutreRemun23Trait;
    use StringTypeAutreRemun24Trait;
    use StringTypeAutreRemun31Trait;
    use StringTypeAutreRemun32Trait;
    use StringTypeAutreRemun33Trait;
    use StringTypeAutreRemun34Trait;
    use StringTypeCrccaEmpTrait;
    use StringTypeRemun11Trait;
    use StringTypeRemun12Trait;
    use StringTypeRemun13Trait;
    use StringTypeRemun14Trait;
    use StringTypeRemun21Trait;
    use StringTypeRemun22Trait;
    use StringTypeRemun23Trait;
    use StringTypeRemun24Trait;
    use StringTypeRemun31Trait;
    use StringTypeRemun32Trait;
    use StringTypeRemun33Trait;
    use StringTypeRemun34Trait;
    use StringTypeTravailTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
