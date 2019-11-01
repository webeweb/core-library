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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAdherentSyndicatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAssujettiCvaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCaisseCpTransportTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCoeffFillonMoins20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolExclureLfr2012Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionMaintienSalAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJfChargeEmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaintienNetDeducCsgijssTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolReductionMayotteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSiretCentralisateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSmicMCourantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSocieteInterimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTepaMoins20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinExclureLfr2012Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxComplHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCotisOssEtOpeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxHCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeJeiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbFractionEtabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeChgtEffectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAutreSignatureDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBic2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBic3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMedTravDueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrgaDueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeHeuresActPartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeIndemAbsIntempTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeIndemActPartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeIntVersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargePartVersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactSignatureDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGestionHstepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIban2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIban3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanIdClient2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanIdClient3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImplantationEntrepriseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLieuSignatureDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSignataireDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomSignataireDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPseudoSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualiteSignataireDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRemunerationExpatriesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelSignatureDnaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeEffectifCtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeMaintienBrutNetTrait;

/**
 * Etablissements2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Etablissements2 {

    use BoolAdherentSyndicatTrait;
    use StringAnneeChgtEffectifTrait;
    use IntAnneeJeiTrait;
    use BoolAssujettiCvaeTrait;
    use StringAutreSignatureDnaeTrait;
    use StringBic2Trait;
    use StringBic3Trait;
    use BoolCaisseCpTransportTrait;
    use StringCategorieJuridiqueTrait;
    use IntCodeEtablissementTrait;
    use StringCodeMedTravDueTrait;
    use StringCodeOrgaDueTrait;
    use BoolCoeffFillonMoins20Trait;
    use StringCompteChargeHeuresActPartTrait;
    use StringCompteChargeIndemAbsIntempTrait;
    use StringCompteChargeIndemActPartTrait;
    use StringCompteChargeIntVersTrait;
    use StringCompteChargePartVersTrait;
    use StringContactSignatureDnaeTrait;
    use DateTimeDateFinExclureLfr2012Trait;
    use BoolExclureLfr2012Trait;
    use StringGestionHstepaTrait;
    use BoolGestionMaintienSalAutoTrait;
    use StringIban2Trait;
    use StringIban3Trait;
    use StringIbanIdClient2Trait;
    use StringIbanIdClient3Trait;
    use StringImplantationEntrepriseTrait;
    use BoolJfChargeEmpTrait;
    use StringLieuSignatureDnaeTrait;
    use BoolMaintienNetDeducCsgijssTrait;
    use IntNbFractionEtabTrait;
    use StringNomSignataireDnaeTrait;
    use StringPrenomSignataireDnaeTrait;
    use StringPseudoSiretTrait;
    use StringQualiteSignataireDnaeTrait;
    use BoolReductionMayotteTrait;
    use StringRemunerationExpatriesTrait;
    use BoolSmicMCourantTrait;
    use BoolSiretCentralisateurTrait;
    use BoolSocieteInterimTrait;
    use StringTds19Trait;
    use BoolTepaMoins20Trait;
    use FloatTauxComplHeureTrait;
    use FloatTauxCotisOssEtOpeTrait;
    use FloatTauxHCompTrait;
    use StringTelSignatureDnaeTrait;
    use StringTypeEffectifCtTrait;
    use StringTypeMaintienBrutNetTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
