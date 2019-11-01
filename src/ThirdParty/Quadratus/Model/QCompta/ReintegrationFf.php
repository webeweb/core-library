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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttApportsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttEmpruntsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttPrelevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMttTresoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTableauTrait;

/**
 * Reintegration ff.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ReintegrationFf {

    use DateTimeDateTrait;
    use IntIdTableauTrait;
    use FloatMttApportsTrait;
    use FloatMttEmpruntsTrait;
    use FloatMttPrelevTrait;
    use FloatMttTresoTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
