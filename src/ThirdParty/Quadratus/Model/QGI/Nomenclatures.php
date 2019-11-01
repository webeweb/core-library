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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCode1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCode2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Nomenclatures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Nomenclatures {

    use StringCode1Trait;
    use StringCode2Trait;
    use StringCommentaireTrait;
    use StringCommentaire2Trait;
    use DateTimeDate1Trait;
    use DateTimeDate2Trait;
    use FloatDouble1Trait;
    use FloatDouble2Trait;
    use IntNumeroTrait;
    use StringTexte1Trait;
    use StringTexte2Trait;
    use StringTexte3Trait;
    use StringTexte4Trait;
    use StringTexte5Trait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
