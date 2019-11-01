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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDestRelanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCode1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCode2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereLibre1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereLibre2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRemarquesRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Annexe suite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AnnexeSuite {

    use StringCode1Trait;
    use StringCode2Trait;
    use StringCritereLibre1Trait;
    use StringCritereLibre2Trait;
    use BoolDestRelanceTrait;
    use StringFaxTrait;
    use IntNumeroTrait;
    use StringPrenomTrait;
    use StringRemarquesRtfTrait;
    use StringServiceTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
