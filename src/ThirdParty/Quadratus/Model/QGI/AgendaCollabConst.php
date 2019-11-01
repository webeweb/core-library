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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolArttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolConfidentielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolInterdireRdVHorsTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviOrdreMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDerniereModifAgendaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDimancheAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDimancheAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDimanchePMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDimanchePMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeJeudiAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeJeudiAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeJeudiPMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeJeudiPMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeLundiAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeLundiAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeLundiPMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeLundiPMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMardiAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMardiAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMardiPMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMardiPMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMercrediAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMercrediAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMercrediPMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMercrediPMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePlusPetiteDateActiviteModifieeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSamediAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSamediAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSamediPMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSamediPMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeVendrediAMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeVendrediAMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeVendrediPMdebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeVendrediPMfinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSiteTenueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteRdvTrait;

/**
 * Agenda collab const.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AgendaCollabConst {

    use BoolArttTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeSiteTenueTrait;
    use BoolConfidentielTrait;
    use DateTimeDateDerniereModifAgendaTrait;
    use DateTimeDimancheAMdebTrait;
    use DateTimeDimancheAMfinTrait;
    use DateTimeDimanchePMdebTrait;
    use DateTimeDimanchePMfinTrait;
    use BoolInterdireRdVHorsTravailTrait;
    use DateTimeJeudiAMdebTrait;
    use DateTimeJeudiAMfinTrait;
    use DateTimeJeudiPMdebTrait;
    use DateTimeJeudiPMfinTrait;
    use DateTimeLundiAMdebTrait;
    use DateTimeLundiAMfinTrait;
    use DateTimeLundiPMdebTrait;
    use DateTimeLundiPMfinTrait;
    use DateTimeMardiAMdebTrait;
    use DateTimeMardiAMfinTrait;
    use DateTimeMardiPMdebTrait;
    use DateTimeMardiPMfinTrait;
    use DateTimeMercrediAMdebTrait;
    use DateTimeMercrediAMfinTrait;
    use DateTimeMercrediPMdebTrait;
    use DateTimeMercrediPMfinTrait;
    use DateTimePlusPetiteDateActiviteModifieeTrait;
    use DateTimeSamediAMdebTrait;
    use DateTimeSamediAMfinTrait;
    use DateTimeSamediPMdebTrait;
    use DateTimeSamediPMfinTrait;
    use BoolSuiviOrdreMissionTrait;
    use StringUniteRdvTrait;
    use DateTimeVendrediAMdebTrait;
    use DateTimeVendrediAMfinTrait;
    use DateTimeVendrediPMdebTrait;
    use DateTimeVendrediPMfinTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
