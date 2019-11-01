<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDepuisWebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDemandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEtatCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIndiceTrait;

/**
 * Absences cp previsionnel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevisionnel {

    use StringCodeEmployeTrait;
    use StringCollaborateurTrait;
    use StringCommentaireTrait;
    use DateTimeDateDebutCpTrait;
    use DateTimeDateDemandeTrait;
    use DateTimeDateEtatCpTrait;
    use DateTimeDateFinCpTrait;
    use BoolDepuisWebTrait;
    use StringEtatCpTrait;
    use StringIndiceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
