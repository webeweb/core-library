<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNumeriqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringStringTrait;

/**
 * Options.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Options {

    use BoolBooleenTrait;
    use DateTimeDateHeureTrait;
    use StringDescriptifTrait;
    use FloatNumeriqueTrait;
    use StringStringTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
