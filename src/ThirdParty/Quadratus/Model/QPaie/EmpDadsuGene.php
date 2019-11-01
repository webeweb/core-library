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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAnnexe7MutationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolApprentiEtamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAnciennBtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRachatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBenefAssedicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCaisseCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCaractTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCategSalPourcentAbatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClassBtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeContratTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeConventionColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDistriEtrangerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeExoTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInseeLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeIntitContratTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMetierBtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegimeAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegimeBaseOblTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegimeVieillesseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRetraiteComplementaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSituAdminTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeStatutCategRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeStatutCategTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeStatutProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeExo1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeExo2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeExo3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTempsTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeZoneGeoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDetacheExpatrieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEchelonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtabLieuTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdLieuTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleInseeLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPositionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocLieuTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretLieuTravTrait;

/**
 * Emp dadsu gene.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuGene {

    use DateTimeAnciennBtpTrait;
    use BoolAnnexe7MutationTrait;
    use BoolApprentiEtamTrait;
    use StringBtqLieuTravTrait;
    use StringBenefAssedicTrait;
    use StringBureauDistributeurLieuTravTrait;
    use StringCodeCaisseCpTrait;
    use StringCodeCaractTrait;
    use StringCodeCategSalPourcentAbatTrait;
    use StringCodeClassBtpTrait;
    use StringCodeContratTravTrait;
    use StringCodeConventionColTrait;
    use StringCodeDistriEtrangerTrait;
    use StringCodeExoTravTrait;
    use StringCodeInseeLieuTravTrait;
    use StringCodeIntitContratTravTrait;
    use StringCodeMetierBtpTrait;
    use StringCodeOfficielCommuneLieuTravTrait;
    use StringCodePaysLieuTravTrait;
    use StringCodePostalLieuTravTrait;
    use StringCodeRegimeAtTrait;
    use StringCodeRegimeBaseOblTrait;
    use StringCodeRegimeVieillesseTrait;
    use StringCodeRetraiteComplementaireTrait;
    use StringCodeSituAdminTrait;
    use StringCodeStatutCategTrait;
    use StringCodeStatutCategRetraiteTrait;
    use StringCodeStatutProTrait;
    use StringCodeTypeExo1Trait;
    use StringCodeTypeExo2Trait;
    use StringCodeTypeExo3Trait;
    use StringCodeUniteTempsTravailTrait;
    use StringCodeZoneGeoTrait;
    use StringComplementLieuTravTrait;
    use DateTimeDateRachatTrait;
    use StringDetacheExpatrieTrait;
    use StringEchelonTrait;
    use StringEtabLieuTravailTrait;
    use StringIdLieuTravailTrait;
    use StringIndiceTrait;
    use StringNiveauTrait;
    use StringNomVilleInseeLieuTravTrait;
    use StringNomVilleLieuTravTrait;
    use StringNomVoieLieuTravTrait;
    use StringNumVoieLieuTravTrait;
    use StringNumeroTrait;
    use StringPositionTrait;
    use StringRaisonSocLieuTravTrait;
    use StringSiretLieuTravTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
