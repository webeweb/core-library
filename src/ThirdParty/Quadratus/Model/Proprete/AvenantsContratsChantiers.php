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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeRemplaceAuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeRemplaceDuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAbsenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTitulaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDocumentTrait;

/**
 * Avenants contrats chantiers.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContratsChantiers {

    use StringCodeAbsenceTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeEmployeTrait;
    use StringCodeTitulaireTrait;
    use IntNumeroAvenantTrait;
    use IntNumeroLigneTrait;
    use DateTimeRemplaceAuTrait;
    use DateTimeRemplaceDuTrait;
    use StringTypeDocumentTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
