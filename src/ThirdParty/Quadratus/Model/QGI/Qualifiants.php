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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVisuAppelsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVisuDocumentsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVisuEvenementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntColonneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;

/**
 * Qualifiants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Qualifiants {

    use StringCodeTrait;
    use IntColonneTrait;
    use BoolVisuAppelsTrait;
    use BoolVisuDocumentsTrait;
    use BoolVisuEvenementsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
