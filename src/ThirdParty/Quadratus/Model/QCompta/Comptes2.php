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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAffacturageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinDecadeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinQuinzaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviStockTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntJourDepartEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumMandatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContrepartieAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptFourAffacturageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomBanque2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomBanque3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanCodeImputFraisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbJoursEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauRelanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptStockTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProfessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRib2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRib3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTermeEcheanceLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSuiviTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZipCodeTrait;

/**
 * Comptes2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes2 {

    use BoolAffacturageTrait;
    use StringBicTrait;
    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use StringCodeOfficielCommuneTrait;
    use StringCodePostalTrait;
    use StringComplementTrait;
    use StringComplementSuiteTrait;
    use StringContrepartieAutoTrait;
    use StringCptFourAffacturageTrait;
    use StringCptOrigineTrait;
    use StringDomBanqueTrait;
    use StringDomBanque2Trait;
    use StringDomBanque3Trait;
    use BoolEcheanceFinDecadeTrait;
    use BoolEcheanceFinQuinzaineTrait;
    use StringEmailTrait;
    use StringFaxTrait;
    use StringIbanTrait;
    use StringIbanCodeImputFraisTrait;
    use StringIdentTvaTrait;
    use IntJourDepartEcheanceTrait;
    use StringModePaiementTrait;
    use StringNbJoursEcheanceTrait;
    use StringNiveauRelanceTrait;
    use StringNomVilleTrait;
    use StringNomVoieTrait;
    use StringNumCptStockTrait;
    use IntNumMandatTrait;
    use StringNumVoieTrait;
    use StringNumeroCompteTrait;
    use StringPaysTrait;
    use StringProfessionTrait;
    use StringRibTrait;
    use StringRib2Trait;
    use StringRib3Trait;
    use StringSiretTrait;
    use BoolSuiviStockTrait;
    use StringTel1Trait;
    use StringTel2Trait;
    use StringTermeEcheanceLeTrait;
    use StringTypeSuiviTrait;
    use StringZipCodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
