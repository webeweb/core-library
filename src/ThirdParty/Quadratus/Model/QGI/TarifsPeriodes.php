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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCodeClientTrait;

/**
 * Tarifs periodes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TarifsPeriodes {

    use StringCodeArticleTrait;
    use StringCodeClientTrait;
    use StringCodeNatureTrait;
    use DateTimeDateDebutTrait;
    use DateTimeDateFinTrait;
    use FloatRemiseBaseTrait;
    use StringTypeCodeArticleTrait;
    use StringTypeCodeClientTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
