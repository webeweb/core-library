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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNiveauSupplementairelibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFichiersMoveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFichiersPublierWebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauMaxiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPathFormatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPathTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Rg profils.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class RgProfils {

    use StringFichiersMoveTrait;
    use StringFichiersPublierWebTrait;
    use StringNiveauMaxiTrait;
    use BoolNiveauSupplementairelibelleTrait;
    use StringPathTrait;
    use StringPathFormatTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
