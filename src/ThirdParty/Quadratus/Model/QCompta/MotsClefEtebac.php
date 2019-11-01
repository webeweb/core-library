<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringListeComptesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteDepenseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteRecetteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegleTrait;

/**
 * Mots clef etebac.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class MotsClefEtebac {

    use StringCodeJournalTrait;
    use StringLibelleTrait;
    use StringListeComptesTrait;
    use StringMotTrait;
    use StringNumeroCompteDepenseTrait;
    use StringNumeroCompteRecetteTrait;
    use StringRegleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
