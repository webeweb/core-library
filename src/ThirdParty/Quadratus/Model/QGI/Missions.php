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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBmCalculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolClotureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFermetureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMissionMillesimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTpArchiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTpClotureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeClotureDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFermetureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeOuvertureDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDecalageFermetureAutoJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDecalageFermetureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDecalageOuvertureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMoisOuvertureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClotureContexteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClotureParTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOuvertureContexteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOuvertureParTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSocieteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeResponsableTrait;

/**
 * Missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Missions {

    use StringArticleTrait;
    use BoolBmCalculeTrait;
    use StringCentreAnalytiqueTrait;
    use BoolClotureTrait;
    use StringClotureContexteTrait;
    use DateTimeClotureDateTrait;
    use StringClotureParTrait;
    use StringCodeClientTrait;
    use StringCodeMissionTrait;
    use StringCodeMissionTypeTrait;
    use StringCodeResponsableTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDebutTpTrait;
    use DateTimeDateFinTpTrait;
    use DateTimeDateModificationTrait;
    use IntDecalageFermetureAutoTrait;
    use IntDecalageFermetureAutoJoursTrait;
    use IntDecalageOuvertureAutoTrait;
    use StringDescriptifTrait;
    use StringDescriptifRtfTrait;
    use DateTimeDtFermetureAutoTrait;
    use BoolFermetureAutoTrait;
    use StringLibelleTrait;
    use BoolMissionMillesimeTrait;
    use IntMoisOuvertureAutoTrait;
    use StringOuvertureContexteTrait;
    use DateTimeOuvertureDateTrait;
    use StringOuvertureParTrait;
    use StringSocieteTrait;
    use BoolTpArchiveTrait;
    use BoolTpClotureTrait;
    use BoolTransfertCentreTrait;
    use StringTypeCentreTrait;
    use StringTypeResponsableTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
