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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccepteDepuisQBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccepteDepuisQcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccepteDepuisQpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolModifiableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSansImagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringABloquerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAEmettreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Liaisons types envois.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsTypesEnvois {

    use StringABloquerTrait;
    use StringAEmettreTrait;
    use BoolAccepteDepuisQBureauTrait;
    use BoolAccepteDepuisQcTrait;
    use BoolAccepteDepuisQpTrait;
    use StringCodeTrait;
    use StringIntituleTrait;
    use BoolModifiableTrait;
    use BoolSansImagesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
