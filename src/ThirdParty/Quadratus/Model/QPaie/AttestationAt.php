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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccidentMoisEmbaucheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccidentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAutreVivtimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIntegralTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaintienTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaladieProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNationaliteAutreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNationaliteCeeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNationaliteFrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonReprisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPartielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSubIntegralTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSubPartielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAccidentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDernHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDernJTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeEmbaucheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeSubrAuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeSubrDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerReferenceAuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerReferenceDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeRepriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSignatureDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCotisTheoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSalTheoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPerReferenceCotisationsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPerReferenceMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPerReferenceNbHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPerReferenceSalairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireMiniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSubrogationMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAncienneteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCasPartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblATelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblNatureActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblNoAdherentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblNomPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMedecinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMaritalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRisqueAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSexeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSubrogationDureeMaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAttestationTrait;

/**
 * Attestation at.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAt {

    use BoolAccidentTrait;
    use BoolAccidentMoisEmbaucheTrait;
    use StringAdresse1Trait;
    use StringAdresse3Trait;
    use StringAncienneteTrait;
    use BoolAutreVivtimeTrait;
    use StringCasPartTrait;
    use IntCodeEtablissementTrait;
    use DateTimeDateAccidentTrait;
    use DateTimeDateContratTrait;
    use DateTimeDateNaissanceTrait;
    use DateTimeDernHeureTrait;
    use DateTimeDernJTrait;
    use DateTimeEmbaucheTrait;
    use StringEmploiTrait;
    use StringEtblAAdresse1Trait;
    use StringEtblAAdresse2Trait;
    use StringEtblAAdresse3Trait;
    use StringEtblATelTrait;
    use StringEtblAdresse1Trait;
    use StringEtblAdresse2Trait;
    use StringEtblAdresse3Trait;
    use StringEtblNatureActiviteTrait;
    use StringEtblNoAdherentTrait;
    use StringEtblNomPrenomTrait;
    use StringEtblRaisonSocialeTrait;
    use StringEtblTelTrait;
    use StringIbanTrait;
    use BoolIntegralTrait;
    use StringIntituleCompteTrait;
    use StringLienDocumentTrait;
    use StringLieuNaissanceTrait;
    use BoolMaintienTrait;
    use BoolMaladieProTrait;
    use StringMedecinTrait;
    use FloatMontantCotisTheoTrait;
    use FloatMontantSalTheoTrait;
    use StringNirTrait;
    use BoolNationaliteAutreTrait;
    use BoolNationaliteCeeTrait;
    use BoolNationaliteFrTrait;
    use StringNomEmployeTrait;
    use StringNomMaritalTrait;
    use BoolNonReprisTrait;
    use StringNumContratTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroEmployeTrait;
    use BoolPartielTrait;
    use DateTimePerReferenceAuTrait;
    use FloatPerReferenceCotisationsTrait;
    use DateTimePerReferenceDuTrait;
    use FloatPerReferenceMontantTrait;
    use FloatPerReferenceNbHeuresTrait;
    use FloatPerReferenceSalairesTrait;
    use DateTimePeriodeSubrAuTrait;
    use DateTimePeriodeSubrDuTrait;
    use StringPrenomEmployeTrait;
    use StringQualificationTrait;
    use DateTimeRepriseTrait;
    use StringRisqueAtTrait;
    use StringSiretTrait;
    use FloatSalaireMiniTrait;
    use StringSexeTrait;
    use DateTimeSignatureDateTrait;
    use StringSignatureNomTrait;
    use StringSignatureQualiteTrait;
    use StringSignatureVilleTrait;
    use BoolSubIntegralTrait;
    use BoolSubPartielTrait;
    use StringSubrogationDureeMaxTrait;
    use FloatSubrogationMontantTrait;
    use StringTypeAttestationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
