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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDernierePeriodeAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPremierePeriodeAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds107Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds108Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds109Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds110Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds111Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds113Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds119Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds120Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds121Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds122Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds142DejaCalculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds78Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutPeriodeDeclTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPeriodeDeclTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseCalcTds142Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCumNetImposTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemnImpatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHSupComplExoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatParticipServPersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds100Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds102Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds103Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds105Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds112Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds117Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds125Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds127Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds132Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds134Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds135Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds136Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds137Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds141Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds142Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds81Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds82Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds84Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds85Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds86Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds87Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds88Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds89Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds90Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds91Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds92Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds93Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds94Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds95Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsAbattFraisProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsAllocChomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsAllocComplIjssTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsAllocRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsContribCeChequesVacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsCumulNTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsIndemnDepartRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsIndemnImposablesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsRembFraisProTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsSommeExoTaxeSalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeAtPerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbPerPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTds75Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTdsFlagRazTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds128Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds133Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds139Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTds77Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTdsSup1200Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTdsSup120Trait;

/**
 * Emp tds calcul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpTdsCalcul {

    use FloatBaseCalcTds142Trait;
    use IntCodeAtPerTrait;
    use IntCodeEtablissementTrait;
    use FloatCumNetImposTrait;
    use DateTimeDebutPeriodeDeclTrait;
    use BoolDernierePeriodeAnneeTrait;
    use DateTimeFinPeriodeDeclTrait;
    use FloatIndemnImpatTrait;
    use FloatMontantHSupComplExoTrait;
    use FloatNbHeureSalTrait;
    use FloatNbHeureTravTrait;
    use IntNbPerPaieTrait;
    use StringNumeroTrait;
    use IntNumeroOrdreTrait;
    use FloatParticipServPersTrait;
    use BoolPremierePeriodeAnneeTrait;
    use FloatTds100Trait;
    use FloatTds102Trait;
    use FloatTds103Trait;
    use FloatTds105Trait;
    use BoolTds107Trait;
    use BoolTds108Trait;
    use BoolTds109Trait;
    use BoolTds110Trait;
    use BoolTds111Trait;
    use FloatTds112Trait;
    use BoolTds113Trait;
    use FloatTds117Trait;
    use BoolTds119Trait;
    use BoolTds120Trait;
    use BoolTds121Trait;
    use BoolTds122Trait;
    use FloatTds125Trait;
    use FloatTds127Trait;
    use StringTds128Trait;
    use FloatTds132Trait;
    use StringTds133Trait;
    use FloatTds134Trait;
    use FloatTds135Trait;
    use FloatTds136Trait;
    use FloatTds137Trait;
    use StringTds139Trait;
    use FloatTds141Trait;
    use IntTds75Trait;
    use StringTds77Trait;
    use BoolTds78Trait;
    use FloatTds81Trait;
    use FloatTds82Trait;
    use FloatTds84Trait;
    use FloatTds85Trait;
    use FloatTds86Trait;
    use FloatTds87Trait;
    use FloatTds88Trait;
    use FloatTds89Trait;
    use FloatTds90Trait;
    use FloatTds91Trait;
    use FloatTds92Trait;
    use FloatTds93Trait;
    use FloatTds94Trait;
    use FloatTds95Trait;
    use StringTdsSup120Trait;
    use StringTdsSup1200Trait;
    use FloatTds142Trait;
    use BoolTds142DejaCalculeTrait;
    use FloatTdsAbattFraisProTrait;
    use FloatTdsAllocChomTrait;
    use FloatTdsAllocComplIjssTrait;
    use FloatTdsAllocRetraiteTrait;
    use FloatTdsContribCeChequesVacTrait;
    use FloatTdsCumulNTrait;
    use IntTdsFlagRazTrait;
    use FloatTdsIndemnDepartRetraiteTrait;
    use FloatTdsIndemnImposablesTrait;
    use FloatTdsRembFraisProTrait;
    use FloatTdsSommeExoTaxeSalTrait;
    use FloatTotalPlafTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
