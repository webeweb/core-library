<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBoniMaliTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMontantTtCcreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMontantTtCdebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDossCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefImageTrait;

/**
 * Fact fourn entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class FactFournEntete {

    use BoolBoniMaliTrait;
    use StringCodeJournalTrait;
    use DateTimeDateTrait;
    use IntFolioTrait;
    use StringLibAutoTrait;
    use StringLibelleTrait;
    use StringMonnaieTrait;
    use StringMontantTtCcreditTrait;
    use StringMontantTtCdebitTrait;
    use StringNumDossCptaTrait;
    use StringNumFactureTrait;
    use StringNumFournisseurTrait;
    use IntNumLotTrait;
    use StringNumUniqTrait;
    use StringRefImageTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
