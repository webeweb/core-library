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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolConfirmeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsTransfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPriveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIsTacheTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBudgetNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCritereLibreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInterlocuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMemoPlusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMessageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumOrdreMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumUniq2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPieceJointeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRecurrenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeActiviteTrait;

/**
 * Agenda lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AgendaLignes {

    use StringBudgetNumUniqTrait;
    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeMissionTrait;
    use StringCodeTacheTrait;
    use StringCollCreationTrait;
    use StringCollModifTrait;
    use BoolConfirmeTrait;
    use StringCritereLibreTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateModifTrait;
    use DateTimeHeureDebutTrait;
    use DateTimeHeureFinTrait;
    use StringInterlocuteurTrait;
    use IntIsTacheTpTrait;
    use BoolIsTransfTrait;
    use DateTimeJourTrait;
    use StringMemoPlusTrait;
    use StringMessageTrait;
    use StringNumOrdreMissionTrait;
    use StringNumUniqTrait;
    use StringNumUniq2Trait;
    use StringPieceJointeTrait;
    use BoolPriveTrait;
    use StringRecurrenceTrait;
    use StringTypeActiviteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
