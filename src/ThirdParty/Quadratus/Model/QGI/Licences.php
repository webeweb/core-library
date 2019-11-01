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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNombrePostesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientDistrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProduitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCpVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOption1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOption2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOption3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOption4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSupportTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeReseauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVersionTrait;

/**
 * Licences.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Licences {

    use StringCodeClientTrait;
    use StringCodeClientDistrTrait;
    use StringCodeProduitTrait;
    use StringCommentaireTrait;
    use StringCpVilleTrait;
    use DateTimeDateCreationTrait;
    use BoolDemoTrait;
    use StringLicenceTrait;
    use StringNomClientTrait;
    use IntNombrePostesTrait;
    use StringOption1Trait;
    use StringOption2Trait;
    use StringOption3Trait;
    use StringOption4Trait;
    use DateTimePeriodeTrait;
    use StringSupportTrait;
    use StringTypeReseauTrait;
    use StringVersionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
