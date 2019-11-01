<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCentraliseGdLivreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolContrepartieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtebacSkipTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtebacXFerDetaillerBqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtebacXFerDoPrefixCodeOpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEtebacXFerLignesCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestNumPieceJrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMontantNegatifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieBordereauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypePieceGlobalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleAccesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteContrepartieAammTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteContrepartieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEquilibreAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtebacXFerIndLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGestionNumPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanIdClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauDroitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumEmetteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPropoLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeJournalTrait;

/**
 * Journaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Journaux {

    use StringBicTrait;
    use BoolCentraliseGdLivreTrait;
    use StringCleAccesTrait;
    use StringCodeTrait;
    use StringCodeCentreTrait;
    use StringCodeEntreeTrait;
    use StringCompteContrepartieTrait;
    use StringCompteContrepartieAammTrait;
    use BoolContrepartieTrait;
    use StringDomBanqueTrait;
    use StringEquilibreAutoTrait;
    use BoolEtebacSkipTvaTrait;
    use BoolEtebacXFerDetaillerBqTrait;
    use BoolEtebacXFerDoPrefixCodeOpTrait;
    use StringEtebacXFerIndLibelleTrait;
    use BoolEtebacXFerLignesCompTrait;
    use StringFamilleTrait;
    use BoolGestNumPieceJrnTrait;
    use BoolGestionFolioTrait;
    use StringGestionNumPieceTrait;
    use StringIbanTrait;
    use StringIbanIdClientTrait;
    use StringLibelleTrait;
    use BoolMontantNegatifTrait;
    use StringNiveauDroitTrait;
    use StringNumEmetteurTrait;
    use IntProchainNumPieceTrait;
    use StringPropoLibelleTrait;
    use StringRibTrait;
    use BoolSaisieBordereauTrait;
    use StringTypeJournalTrait;
    use BoolTypePieceGlobalTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
