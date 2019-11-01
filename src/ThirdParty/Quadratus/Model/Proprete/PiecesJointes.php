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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAPublierWebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolArchiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDocAttacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomPieceTrait;

/**
 * Pieces jointes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PiecesJointes {

    use BoolAPublierEspaceClientTrait;
    use BoolAPublierWebTrait;
    use BoolArchiveTrait;
    use StringAuteurTrait;
    use DateTimeDateCreationTrait;
    use IntIndiceTrait;
    use StringLibelleTrait;
    use IntNbDocAttacheTrait;
    use StringNomPieceTrait;
    use IntNumPieceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
