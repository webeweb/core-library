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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolConfidentielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdHistoriqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurClotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurDestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurEntrantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProduitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConsequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailAuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeQualifiantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPieceJointeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSpecialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeMessageTrait;

/**
 * Historique appels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class HistoriqueAppels {

    use StringCodeClientTrait;
    use StringCodeCollaborateurClotTrait;
    use StringCodeCollaborateurDestTrait;
    use StringCodeCollaborateurEntrantTrait;
    use StringCodeProduitTrait;
    use BoolConfidentielTrait;
    use StringConsequenceTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateSortieTrait;
    use StringEmailAuteurTrait;
    use StringGroupeQualifiantTrait;
    use IntIdHistoriqueTrait;
    use StringIntituleTrait;
    use StringNatureTrait;
    use StringNomClientTrait;
    use StringOrigineTrait;
    use StringPieceJointeTrait;
    use StringReponseTrait;
    use StringSpecialTrait;
    use StringTelTrait;
    use StringTypeMessageTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
