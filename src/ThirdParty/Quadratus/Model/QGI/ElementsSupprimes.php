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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateElemTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMemo1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeElemTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Elements supprimes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ElementsSupprimes {

    use DateTimeDate1Trait;
    use DateTimeDateElemTrait;
    use StringMemo1Trait;
    use StringTexte1Trait;
    use StringTypeElemTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
