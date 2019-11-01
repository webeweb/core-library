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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGenererCouponPaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantDucsAnnuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoyenPaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;

/**
 * Paiements edi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class PaiementsEdi {

    use StringBicTrait;
    use IntCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use StringDomBanqueTrait;
    use BoolGenererCouponPaiementTrait;
    use StringIbanTrait;
    use FloatMontantTrait;
    use FloatMontantDucsAnnuelleTrait;
    use StringMoyenPaiementTrait;
    use StringRibTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
