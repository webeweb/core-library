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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNoeudLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoefficientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNoteObjectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroNoeudTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCritere1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamilleElementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleCritere1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdBlocageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdNoeudTrait;

/**
 * Chantiers descriptif locaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocaux {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeCritere1Trait;
    use FloatCoefficientTrait;
    use DateTimeDateTransfertTrait;
    use StringFamilleElementsTrait;
    use StringLibelleTrait;
    use StringLibelleCritere1Trait;
    use IntNiveauNoeudTrait;
    use BoolNoeudLocalTrait;
    use FloatNoteObjectifTrait;
    use IntNumeroNoeudTrait;
    use StringPosteTrait;
    use StringUniqIdBlocageTrait;
    use StringUniqIdNoeudTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
