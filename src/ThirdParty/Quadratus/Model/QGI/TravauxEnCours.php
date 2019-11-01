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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCatalogueeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEnvoiPostItTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailFaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateButoirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurDestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurEntrantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDemandeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPieceJointeTrait;

/**
 * Travaux en cours.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TravauxEnCours {

    use BoolCatalogueeTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurDestTrait;
    use StringCodeCollaborateurEntrantTrait;
    use DateTimeDateAlerteTrait;
    use DateTimeDateButoirTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateModifTrait;
    use StringDemandeurTrait;
    use BoolEnvoiPostItTrait;
    use IntIdTravailTrait;
    use StringIntituleTrait;
    use StringNomClientTrait;
    use StringPieceJointeTrait;
    use BoolTravailFaitTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
