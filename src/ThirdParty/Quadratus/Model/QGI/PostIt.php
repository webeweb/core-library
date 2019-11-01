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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSysSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollDestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollOrgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefGuidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Post it.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class PostIt {

    use StringCodeCollDestTrait;
    use StringCodeCollOrgTrait;
    use DateTimeDateHeureTrait;
    use DateTimeDateSysSaisieTrait;
    use StringLibelleTrait;
    use StringRefGuidTrait;
    use IntTypeTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
