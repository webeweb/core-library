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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFicheContradictoireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFicheSigneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateControleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCtrlPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNoteGlobaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNoteObjectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroFicheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroNoeudLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringControleurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLocalPereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSatisfactionGeneraleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeControleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdBlocageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdNoeudTrait;

/**
 * Fiches controles entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesEntetes {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCommentaireTrait;
    use StringControleurTrait;
    use DateTimeDateControleTrait;
    use DateTimeDateCtrlPrevueTrait;
    use DateTimeDateTransfertTrait;
    use BoolFicheContradictoireTrait;
    use BoolFicheSigneeTrait;
    use DateTimeHeureDebutTrait;
    use DateTimeHeureFinTrait;
    use StringLibelleTrait;
    use StringLienDocumentTrait;
    use StringLocalTrait;
    use StringLocalPereTrait;
    use FloatNoteGlobaleTrait;
    use FloatNoteObjectifTrait;
    use IntNumeroFicheTrait;
    use IntNumeroNoeudLocalTrait;
    use StringSatisfactionGeneraleTrait;
    use StringTypeControleTrait;
    use StringUniqIdBlocageTrait;
    use StringUniqIdNoeudTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
