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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFermetureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRecurrenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypeCompteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDecalageFermetureAutoJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDecalageFermetureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDecalageOuvertureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMoisOuvertureAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifRtfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTachesGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeVisuTachesTrait;

/**
 * Type missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TypeMissions {

    use StringArticleTrait;
    use StringCentreAnalytiqueTrait;
    use StringCodeTrait;
    use StringCodeFamilleTrait;
    use StringCodeResponsableTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateModificationTrait;
    use IntDecalageFermetureAutoTrait;
    use IntDecalageFermetureAutoJoursTrait;
    use IntDecalageOuvertureAutoTrait;
    use StringDescriptifTrait;
    use StringDescriptifRtfTrait;
    use BoolFermetureAutoTrait;
    use StringLibelleTrait;
    use IntMoisOuvertureAutoTrait;
    use IntOrdreTrait;
    use BoolRecurrenteTrait;
    use StringTachesGroupeTrait;
    use BoolTransfertCentreTrait;
    use StringTypeCentreTrait;
    use BoolTypeCompteurTrait;
    use StringTypeResponsableTrait;
    use StringTypeVisuTachesTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
