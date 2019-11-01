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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvecMiseEnSommTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolConfidentielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDemandeArTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMessageLuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUrgentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMessageLuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRedirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMiseEnSommDateHeureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCompteurTempsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdAppelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAppelsEnCoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurDestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurEntrantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurRedirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProduitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConsequenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDestinatairesATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDestinatairesCcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailAuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeQualifiantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPieceJointeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSousRepRefGuidTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSpecialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeMessageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Appels en cours.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AppelsEnCours {

    use BoolAvecMiseEnSommTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurDestTrait;
    use StringCodeCollaborateurEntrantTrait;
    use StringCodeCollaborateurRedirTrait;
    use StringCodeProduitTrait;
    use IntCompteurTempsTrait;
    use BoolConfidentielTrait;
    use StringConsequenceTrait;
    use DateTimeDateCreationClientTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateMessageLuTrait;
    use DateTimeDateRedirTrait;
    use BoolDemandeArTrait;
    use StringDestinatairesATrait;
    use StringDestinatairesCcTrait;
    use StringEmailAuteurTrait;
    use StringGroupeQualifiantTrait;
    use IntIdAppelTrait;
    use StringIntituleTrait;
    use BoolMessageLuTrait;
    use DateTimeMiseEnSommDateHeureTrait;
    use StringNatureTrait;
    use IntNbAppelsEnCoursTrait;
    use StringNomClientTrait;
    use StringOrigineTrait;
    use StringPieceJointeTrait;
    use StringReponseTrait;
    use StringSousRepRefGuidTrait;
    use StringSpecialTrait;
    use StringTelTrait;
    use StringTypeMessageTrait;
    use StringUniqIdTrait;
    use BoolUrgentTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
