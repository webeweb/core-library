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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProspectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;

/**
 * Prospects.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Prospects {

    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use StringCodePostalTrait;
    use StringCodeProspectTrait;
    use StringComplementTrait;
    use StringNomTrait;
    use StringNomSuiteTrait;
    use StringNomSuite2Trait;
    use StringNomSuite3Trait;
    use StringNomVoieTrait;
    use StringNumVoieTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
