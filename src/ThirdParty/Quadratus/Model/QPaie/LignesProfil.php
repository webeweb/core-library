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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebPerApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinPerApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneProfilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProfilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFreq9Trait;

/**
 * Lignes profil.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesProfil {

    use StringCodeLibelleTrait;
    use StringCodeProfilTrait;
    use DateTimeDebPerApplicationTrait;
    use DateTimeFinPerApplicationTrait;
    use StringFreq1Trait;
    use StringFreq10Trait;
    use StringFreq11Trait;
    use StringFreq12Trait;
    use StringFreq2Trait;
    use StringFreq3Trait;
    use StringFreq4Trait;
    use StringFreq5Trait;
    use StringFreq6Trait;
    use StringFreq7Trait;
    use StringFreq8Trait;
    use StringFreq9Trait;
    use IntNumLigneProfilTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
