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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTitulaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNominationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeMandatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPositionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringObservationsTrait;

/**
 * Commissaires comptes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CommissairesComptes {

    use StringCodeCacTrait;
    use StringCodeClientTrait;
    use DateTimeDateNominationTrait;
    use IntDureeMandatTrait;
    use StringObservationsTrait;
    use IntPositionTrait;
    use BoolTitulaireTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
