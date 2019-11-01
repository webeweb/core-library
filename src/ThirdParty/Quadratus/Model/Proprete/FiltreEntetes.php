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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCommercialFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFiltreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFonctionnaliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeFiltreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Filtre entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FiltreEntetes {

    use StringCodeFiltreTrait;
    use StringCollaborateurTrait;
    use BoolCommercialFactureTrait;
    use StringFonctionnaliteTrait;
    use StringLibelleTrait;
    use StringTypeFiltreTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
