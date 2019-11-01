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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurCotisInitialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePopulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCotisTrait;

/**
 * Dadsu prevoyance regroupement.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuPrevoyanceRegroupement {

    use StringCodeLibelleTrait;
    use StringCodeOptionTrait;
    use StringCodeOrganismeTrait;
    use StringCodePopulationTrait;
    use StringCodeRegroupementTrait;
    use StringRefContratTrait;
    use StringTypeCotisTrait;
    use FloatValeurCotisTrait;
    use FloatValeurCotisInitialeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
