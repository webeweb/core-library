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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypeSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringChapitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGUniqIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLstCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOptionVisuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSelTrait;

/**
 * Clients lst perso.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPerso {

    use StringChapitreTrait;
    use StringCollCreatTrait;
    use StringCollModifTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateModifTrait;
    use StringDescriptionTrait;
    use StringGUniqIdTrait;
    use IntIndiceTrait;
    use StringLstCollabTrait;
    use StringOptionVisuTrait;
    use IntOrigineTrait;
    use DateTimePeriodeDebTrait;
    use DateTimePeriodeFinTrait;
    use BoolTypeSaisieTrait;
    use StringTypeSelTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
