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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentHSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibHsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSemaineTrait;

/**
 * Prepa paie h sup.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class PrepaPaieHSup {

    use StringCodeLibHsTrait;
    use FloatNbHSupTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeTrait;
    use FloatPourcentHSupTrait;
    use StringSemaineTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
