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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCotisPatronalesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCotisSalarialesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHeuresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafondTrait;

/**
 * Controle salaires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ControleSalaires {

    use FloatBrutTrait;
    use FloatCotisPatronalesTrait;
    use FloatCotisSalarialesTrait;
    use FloatHeuresTrait;
    use DateTimePeriodeTrait;
    use FloatPlafondTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
