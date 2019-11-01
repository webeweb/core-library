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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBasePrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceDadsuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeGestionnaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePopulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypePrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEvenContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoAffiliationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;

/**
 * Dadsu prev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuPrev {

    use FloatBasePrevTrait;
    use IntCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use StringCodeOrganismeGestionnaireTrait;
    use StringCodePopulTrait;
    use StringCodeTypePrevTrait;
    use DateTimeDebutPeriodeTrait;
    use StringEvenContratTrait;
    use DateTimeFinPeriodeTrait;
    use StringIdInstitutionTrait;
    use IntIndiceDadsuTrait;
    use StringNoAffiliationTrait;
    use StringNumeroTrait;
    use IntNumeroOrdreTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
