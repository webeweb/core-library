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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinRemplTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRemplacantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeRemplTrait;

/**
 * Absences cp prev rempl.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevRempl {

    use StringCodeEmployeTrait;
    use StringCodeRemplacantTrait;
    use DateTimeDateDebutCpTrait;
    use DateTimeDateDebutRemplTrait;
    use DateTimeDateFinRemplTrait;
    use StringIndiceTrait;
    use StringTypeRemplTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
