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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEspaceClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctAbsencesCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctAcomptesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctArchivesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctBulletinsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctDocumentsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctDonneesVTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctEtatCivilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifAbsencesCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifAcomptesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifArchivesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifBulletinsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifDocumentsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifDonneesVTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifEtatCivilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUserExpertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVisuSalairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabMessagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFlagTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauConfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoDossPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumiKeyTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPasswordTrait;

/**
 * i paie droits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iPaieDroits {

    use StringCodeCollabMessagesTrait;
    use StringCodeUserTrait;
    use BoolEspaceClientTrait;
    use BoolFctAbsencesCpTrait;
    use BoolFctAcomptesTrait;
    use BoolFctArchivesTrait;
    use BoolFctBulletinsTrait;
    use BoolFctDocumentsTrait;
    use BoolFctDonneesVTrait;
    use BoolFctEtatCivilTrait;
    use BoolFctModifAbsencesCpTrait;
    use BoolFctModifAcomptesTrait;
    use BoolFctModifArchivesTrait;
    use BoolFctModifBulletinsTrait;
    use BoolFctModifDocumentsTrait;
    use BoolFctModifDonneesVTrait;
    use BoolFctModifEtatCivilTrait;
    use StringFlagTrait;
    use StringNiveauConfTrait;
    use StringNoDossPaieTrait;
    use StringNomUserTrait;
    use StringNumiKeyTrait;
    use StringPasswordTrait;
    use BoolUserExpertTrait;
    use BoolVisuSalairesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
