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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAPublierEspaceClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomFichierIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Photos.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Photos {

    use BoolAPublierEspaceClientTrait;
    use StringAuteurTrait;
    use DateTimeDateCreationTrait;
    use StringNomFichierIdTrait;
    use StringTypeIdTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
