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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJourReposRecupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSeuilDeclencheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroGrilleTypeTrait;

/**
 * Seuil repos recup.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SeuilReposRecup {

    use DateTimeDateApplicationTrait;
    use FloatNbJourReposRecupTrait;
    use IntNumeroGrilleTypeTrait;
    use FloatSeuilDeclencheTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
