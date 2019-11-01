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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte5Trait;

/**
 * Criteres chantier.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CriteresChantier {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeRef1Trait;
    use StringCodeRef2Trait;
    use StringCodeRef3Trait;
    use StringCodeRef4Trait;
    use StringCodeRef5Trait;
    use StringTexte1Trait;
    use StringTexte2Trait;
    use StringTexte3Trait;
    use StringTexte4Trait;
    use StringTexte5Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
