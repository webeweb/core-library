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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCpPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHEffectivesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHPrevuesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHRealiseesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReposCompAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReposCompPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReposRemplAcquisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReposRemplPrisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumSemTrait;

/**
 * Prepa paie repos.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PrepaPaieRepos {

    use StringCodeEmployeTrait;
    use FloatCpPrisTrait;
    use FloatHEffectivesTrait;
    use FloatHPrevuesTrait;
    use FloatHRealiseesTrait;
    use StringNumSemTrait;
    use DateTimePeriodeTrait;
    use FloatReposCompAcquisTrait;
    use FloatReposCompPrisTrait;
    use FloatReposRemplAcquisTrait;
    use FloatReposRemplPrisTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
