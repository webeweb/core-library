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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPublierWebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateHeureSysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeArchivageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceBulletinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChapitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChronoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Documents.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Documents {

    use StringAnneeTrait;
    use StringAuteurTrait;
    use StringChapitreTrait;
    use StringChronoTrait;
    use StringCodeNatureTrait;
    use DateTimeDateHeureSysTrait;
    use DateTimeDateModificationTrait;
    use IntIndiceBulletinTrait;
    use StringLibelleTrait;
    use StringLienDocumentTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeArchivageTrait;
    use BoolPublierWebTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
