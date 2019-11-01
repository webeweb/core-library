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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerBulDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePerBulFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseAfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceBulDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceBulFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndicePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Regularisation af.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegularisationAf {

    use FloatBaseAfTrait;
    use StringCodeLibelleTrait;
    use IntIndiceBulDebTrait;
    use IntIndiceBulFinTrait;
    use IntIndicePeriodeTrait;
    use StringNumeroEmployeTrait;
    use DateTimePerBulDebTrait;
    use DateTimePerBulFinTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
