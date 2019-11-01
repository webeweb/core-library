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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureAbsNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureAbsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAbsenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeHeureTrait;

/**
 * Point emp heures abs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbs {

    use StringCodeAbsenceTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeEmployeTrait;
    use StringCodeTacheTrait;
    use DateTimeDateTrait;
    use DateTimeHeureAbsTrait;
    use DateTimeHeureAbsNuitTrait;
    use IntNumBtTrait;
    use StringTypeHeureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
