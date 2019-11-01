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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutSemaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHorairePrevuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroGrilleTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroSemaineTrait;

/**
 * Previsionnel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Previsionnel {

    use IntAnneeTrait;
    use DateTimeDateApplicationTrait;
    use DateTimeDebutSemaineTrait;
    use FloatHorairePrevuTrait;
    use IntNumeroGrilleTypeTrait;
    use StringNumeroSemaineTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
