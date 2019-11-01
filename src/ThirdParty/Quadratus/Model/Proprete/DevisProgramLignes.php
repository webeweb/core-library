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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNoteResultatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatVitesseTheoriqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneProgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEchelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOperationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProgrammeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDevisTrait;

/**
 * Devis program lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisProgramLignes {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeEchelleTrait;
    use StringCodeOperationTrait;
    use StringCodeProgrammeTrait;
    use FloatCoefficientTrait;
    use FloatNoteResultatTrait;
    use StringNumDevisTrait;
    use IntNumLigneTrait;
    use IntNumLigneProgTrait;
    use FloatVitesseTheoriqueTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
