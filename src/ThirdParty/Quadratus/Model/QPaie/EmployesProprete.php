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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolControleurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolHotellerieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLivreurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolModulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPolyvalentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;

/**
 * Employes proprete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmployesProprete {

    use BoolControleurTrait;
    use BoolHotellerieTrait;
    use BoolLivreurTrait;
    use BoolModulationTrait;
    use StringNumeroEmployeTrait;
    use BoolPolyvalentTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
