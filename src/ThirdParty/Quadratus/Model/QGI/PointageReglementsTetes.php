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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateGenereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSaisiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollGenereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptPayeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDossTrait;

/**
 * Pointage reglements tetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class PointageReglementsTetes {

    use StringCodeClientTrait;
    use StringCodeCollCreationTrait;
    use StringCodeCollGenereTrait;
    use StringCodeCollModifTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateGenereTrait;
    use DateTimeDateModifTrait;
    use StringLibelleTrait;
    use FloatMontantSaisiTrait;
    use StringNumCptPayeurTrait;
    use StringNumDossTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
