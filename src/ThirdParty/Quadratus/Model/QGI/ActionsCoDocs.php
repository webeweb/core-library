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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDocTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeManifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmplacementFichierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;

/**
 * Actions co docs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoDocs {

    use StringAuteurTrait;
    use StringCodeActionTrait;
    use StringCodeClientTrait;
    use StringCodeDocTrait;
    use StringCodeManifTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateModificationTrait;
    use StringEmplacementFichierTrait;
    use StringLibelleTrait;
    use IntNumeroTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
