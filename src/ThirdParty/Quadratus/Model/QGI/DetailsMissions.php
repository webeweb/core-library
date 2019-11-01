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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAffectationTrait;

/**
 * Details missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class DetailsMissions {

    use StringCodeCollaborateurTrait;
    use StringCodeMissionTrait;
    use StringCodeTravailTrait;
    use IntNiveauTrait;
    use IntNumLigneTrait;
    use StringTypeAffectationTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
