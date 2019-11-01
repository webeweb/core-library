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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeElementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeElementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdLocalTrait;

/**
 * Chantiers descriptif locaux elements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocauxElements {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeElementTrait;
    use FloatCoefficientTrait;
    use IntNiveauNoeudTrait;
    use IntNumeroNoeudTrait;
    use StringTypeElementTrait;
    use StringUniqIdLocalTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
