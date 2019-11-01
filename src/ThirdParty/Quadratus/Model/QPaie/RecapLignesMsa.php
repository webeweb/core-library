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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFaitLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerDebCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerFinCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePremMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEffectifCiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtCsgrdsrrImpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtCsgrdsrrNonImpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtCsgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul57Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul58Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul59Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul60Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul61Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul62Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul63Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul65Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul66Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul67Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul68Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul69Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul70Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul71Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul72Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul73Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul74Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul75Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul76Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul77Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul78Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul79Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul97Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtElemCalcul98Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtTcpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseMsaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCCollectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleCodeUniteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringListeServicesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPersonneContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSalariesDeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelectionServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSirenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSuiviParTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelPersonneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTriDeclMsaTrait;

/**
 * Recap lignes msa.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RecapLignesMsa {

    use StringAdresseMsaTrait;
    use StringCCollectTrait;
    use StringCodeActiviteTrait;
    use IntCodeEtablissementTrait;
    use StringCodeUniteTrait;
    use DateTimeDateReglementTrait;
    use IntEffectifCiceTrait;
    use StringFaitATrait;
    use DateTimeFaitLeTrait;
    use DateTimeFinPerTrait;
    use StringIntituleCodeUniteTrait;
    use StringListeServicesTrait;
    use IntMtCsgTrait;
    use IntMtCsgrdsrrImpTrait;
    use IntMtCsgrdsrrNonImpTrait;
    use IntMtElemCalcul57Trait;
    use IntMtElemCalcul58Trait;
    use IntMtElemCalcul59Trait;
    use IntMtElemCalcul60Trait;
    use IntMtElemCalcul61Trait;
    use IntMtElemCalcul62Trait;
    use IntMtElemCalcul63Trait;
    use IntMtElemCalcul65Trait;
    use IntMtElemCalcul66Trait;
    use IntMtElemCalcul67Trait;
    use IntMtElemCalcul68Trait;
    use IntMtElemCalcul69Trait;
    use IntMtElemCalcul70Trait;
    use IntMtElemCalcul71Trait;
    use IntMtElemCalcul72Trait;
    use IntMtElemCalcul73Trait;
    use IntMtElemCalcul74Trait;
    use IntMtElemCalcul75Trait;
    use IntMtElemCalcul76Trait;
    use IntMtElemCalcul77Trait;
    use IntMtElemCalcul78Trait;
    use IntMtElemCalcul79Trait;
    use IntMtElemCalcul97Trait;
    use IntMtElemCalcul98Trait;
    use IntMtTcpTrait;
    use DateTimePerDebCiceTrait;
    use DateTimePerFinCiceTrait;
    use DateTimePeriodeDeclaTrait;
    use StringPersonneContactTrait;
    use DateTimePremMoisTrait;
    use StringSirenTrait;
    use StringSiretTrait;
    use StringSalariesDeTrait;
    use StringSelectionServiceTrait;
    use StringSuiviParTrait;
    use StringTelPersonneTrait;
    use StringTriDeclMsaTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
