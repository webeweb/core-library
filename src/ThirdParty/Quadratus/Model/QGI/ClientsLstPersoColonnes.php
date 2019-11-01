<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsFormuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTailleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClauseWhereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIndiceTriTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJointureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbDecimalesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomChampTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefGuidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelectionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;

/**
 * Clients lst perso colonnes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPersoColonnes {

    use StringClauseWhereTrait;
    use IntIndiceTrait;
    use StringIndiceTriTrait;
    use StringIntituleTrait;
    use BoolIsFormuleTrait;
    use StringJointureTrait;
    use StringNbDecimalesTrait;
    use StringNomChampTrait;
    use StringNomTableTrait;
    use StringRefGuidTrait;
    use BoolSaisieTrait;
    use StringSelectionTrait;
    use IntTailleTrait;
    use StringTitreTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
