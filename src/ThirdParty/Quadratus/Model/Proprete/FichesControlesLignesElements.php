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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMiseEnConformiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroFicheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeElementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeElementTrait;

/**
 * Fiches controles lignes elements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesLignesElements {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeElementTrait;
    use FloatCoefficientTrait;
    use DateTimeMiseEnConformiteTrait;
    use IntNiveauNoeudTrait;
    use IntNoteTrait;
    use IntNumeroFicheTrait;
    use IntNumeroNoeudTrait;
    use StringTypeElementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
