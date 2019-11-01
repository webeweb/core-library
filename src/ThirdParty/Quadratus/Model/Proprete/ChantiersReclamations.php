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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolArchiveeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutDocTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinDocTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReclamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTraitementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroReclamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereListe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereListe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauReclamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReclamationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringResultatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeReclamTrait;

/**
 * Chantiers reclamations.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersReclamations {

    use BoolAlerteTrait;
    use BoolArchiveeTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCritereListe1Trait;
    use StringCritereListe2Trait;
    use DateTimeDateDebutDocTrait;
    use DateTimeDateFinDocTrait;
    use DateTimeDateReclamTrait;
    use DateTimeDateTraitementTrait;
    use StringNiveauTrait;
    use StringNiveauReclamTrait;
    use IntNumeroPjTrait;
    use IntNumeroReclamTrait;
    use StringReclamationTrait;
    use StringResultatTrait;
    use StringTypeReclamTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
