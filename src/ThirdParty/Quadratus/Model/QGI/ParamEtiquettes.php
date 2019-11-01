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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvecCodeBarreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvecPrixVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtiqMasqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtiqPlusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolQteEntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtiqDeFrontTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeModeleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImprimanteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInitChampTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInitTableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInitValeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLgZoneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibZoneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;

/**
 * Param etiquettes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ParamEtiquettes {

    use BoolAvecCodeBarreTrait;
    use BoolAvecPrixVenteTrait;
    use StringCodeModeleTrait;
    use IntEtiqDeFrontTrait;
    use BoolEtiqMasqueTrait;
    use BoolEtiqPlusTrait;
    use StringImprimanteTrait;
    use StringInitChampTrait;
    use StringInitTableTrait;
    use StringInitValeurTrait;
    use StringLgZoneTrait;
    use StringLibZoneTrait;
    use StringLibelleTrait;
    use IntNumeroLigneTrait;
    use BoolQteEntTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
