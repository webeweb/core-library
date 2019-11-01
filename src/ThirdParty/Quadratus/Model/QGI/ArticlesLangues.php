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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLangueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationApresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationAvantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitule4Trait;

/**
 * Articles langues.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesLangues {

    use StringCodeArticleTrait;
    use StringCodeLangueTrait;
    use StringDesignationApresTrait;
    use StringDesignationAvantTrait;
    use StringIntitule1Trait;
    use StringIntitule2Trait;
    use StringIntitule3Trait;
    use StringIntitule4Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
