<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCsValideTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCtValideTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeVisiteMedicaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneesPlusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRubTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringServiceTrait;

/**
 * Historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Historique {

    use IntAnneesTrait;
    use IntAnneesPlusTrait;
    use DateTimeCsValideTrait;
    use DateTimeCtValideTrait;
    use IntCodeEtablissementTrait;
    use StringRubTrait;
    use StringServiceTrait;
    use DateTimeVisiteMedicaleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
