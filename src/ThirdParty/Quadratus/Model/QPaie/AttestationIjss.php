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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCasGeneralTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCasParticulierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDispenseTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaladieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaterniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonReprisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPaiementEnEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPaterniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPlusde200hTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPlusde800hTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRectificativeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepriseMotifMedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepriseRaisonPersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSubrogationConstantesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSubrogationPartielleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailTempTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutPaterniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDernJMensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceEnfantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDernJTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeAuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeSubrAuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeSubrDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeRepriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSignatureDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSuspensionDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantGeneralTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantParticulierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtSalBrutMoins150HTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtSalBrutMoins600HTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHCasPartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHGeneralTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSubrogationMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMatriculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMtCgEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMtCpEuroOuFrancTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbEnfantsAChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMaritalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSituationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSuspensionMotifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAttestationTrait;

/**
 * Attestation ijss.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationIjss {

    use StringAdresse1Trait;
    use StringAdresse2Trait;
    use StringAdresse3Trait;
    use BoolCasGeneralTrait;
    use BoolCasParticulierTrait;
    use StringCategorieSalTrait;
    use IntCodeEtablissementTrait;
    use DateTimeDateDebutPaterniteTrait;
    use DateTimeDateDernJMensTrait;
    use DateTimeDateNaissanceEmployeTrait;
    use DateTimeDateNaissanceEnfantTrait;
    use DateTimeDernJTrait;
    use BoolDispenseTravailTrait;
    use StringEmploiTrait;
    use StringEtblAdresse1Trait;
    use StringEtblAdresse2Trait;
    use StringEtblAdresse3Trait;
    use StringEtblRaisonSocialeTrait;
    use StringEtblTelTrait;
    use StringIbanTrait;
    use StringIntituleCompteTrait;
    use StringLienDocumentTrait;
    use BoolMaladieTrait;
    use BoolMaterniteTrait;
    use StringMatriculeTrait;
    use FloatMontantGeneralTrait;
    use FloatMontantParticulierTrait;
    use StringMtCgEuroOuFrancTrait;
    use StringMtCpEuroOuFrancTrait;
    use FloatMtSalBrutMoins150HTrait;
    use FloatMtSalBrutMoins600HTrait;
    use StringNirTrait;
    use StringNbEnfantsAChargeTrait;
    use FloatNbHCasPartTrait;
    use FloatNbHGeneralTrait;
    use StringNomEmployeTrait;
    use StringNomMaritalTrait;
    use BoolNonReprisTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroEmployeTrait;
    use StringOrganismeTrait;
    use BoolPaiementEnEuroTrait;
    use BoolPaterniteTrait;
    use DateTimePeriodeAuTrait;
    use DateTimePeriodeDuTrait;
    use DateTimePeriodeSubrAuTrait;
    use DateTimePeriodeSubrDuTrait;
    use BoolPlusde200hTrait;
    use BoolPlusde800hTrait;
    use StringPrenomEmployeTrait;
    use BoolRectificativeTrait;
    use DateTimeRepriseTrait;
    use BoolRepriseMotifMedTrait;
    use BoolRepriseRaisonPersTrait;
    use StringSiretTrait;
    use DateTimeSignatureDateTrait;
    use StringSignatureNomTrait;
    use StringSignatureQualiteTrait;
    use StringSignatureVilleTrait;
    use StringSituationTrait;
    use BoolSubrogationConstantesTrait;
    use FloatSubrogationMontantTrait;
    use BoolSubrogationPartielleTrait;
    use DateTimeSuspensionDateTrait;
    use StringSuspensionMotifTrait;
    use BoolTravailTempTrait;
    use StringTypeAttestationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
