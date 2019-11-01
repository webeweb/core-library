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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFacturableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInactifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonRemboursableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNonTravailleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOperationnelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuperFacturableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTicketRestoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixVente1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixVente2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrixVente3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPvMaxiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFraisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteComptableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringListeTravauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauExecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeHeureTrait;

/**
 * Taches.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Taches {

    use StringArticleTrait;
    use StringCodeTrait;
    use StringCodeFraisTrait;
    use StringCodeRegroupementTrait;
    use StringCodeTravailTrait;
    use StringCodeUoTrait;
    use StringCompteComptableTrait;
    use StringCompteTvaTrait;
    use BoolFacturableTrait;
    use BoolInactifTrait;
    use StringIntituleTrait;
    use StringIntituleRtfTrait;
    use StringListeTravauxTrait;
    use StringNiveauExecTrait;
    use BoolNonRemboursableTrait;
    use BoolNonTravailleeTrait;
    use BoolOperationnelleTrait;
    use FloatPvMaxiTrait;
    use FloatPrixVente1Trait;
    use FloatPrixVente2Trait;
    use FloatPrixVente3Trait;
    use BoolSaisieTvaTrait;
    use BoolSuperFacturableTrait;
    use BoolTicketRestoTrait;
    use StringTypeHeureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
