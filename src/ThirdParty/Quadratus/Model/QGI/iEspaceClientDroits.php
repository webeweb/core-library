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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctDocumentsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctInfosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctDocumentsAutreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctDocumentsComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctDocumentsJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctDocumentsPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctMessagerieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabMessagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossierClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPasswordTrait;

/**
 * i espace client droits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iEspaceClientDroits {

    use StringCodeCollabMessagesTrait;
    use StringCodeUserTrait;
    use StringDossierClientTrait;
    use BoolFctDocumentsTrait;
    use IntFctDocumentsAutreTrait;
    use IntFctDocumentsComptaTrait;
    use IntFctDocumentsJuridiqueTrait;
    use IntFctDocumentsPaieTrait;
    use BoolFctInfosTrait;
    use IntFctMessagerieTrait;
    use StringNomUserTrait;
    use StringPasswordTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
