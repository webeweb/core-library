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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntWidthTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitColTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLigneAbondementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumColTrait;

/**
 * Saisie prepa colonne.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SaisiePrepaColonne {

    use StringCodeTrait;
    use StringCodeLibelleTrait;
    use StringCommentaireTrait;
    use StringIntitColTrait;
    use StringLigneAbondementTrait;
    use StringNumColTrait;
    use IntWidthTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
