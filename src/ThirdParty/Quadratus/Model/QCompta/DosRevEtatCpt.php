<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolModifieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeRevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDebitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSoldeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatCptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;

/**
 * Dos rev etat cpt.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevEtatCpt {

    use StringCollaborateurTrait;
    use FloatCreditTrait;
    use DateTimeDateModifTrait;
    use FloatDebitTrait;
    use StringEtatCptTrait;
    use BoolModifieTrait;
    use StringNumeroCompteTrait;
    use DateTimePeriodeRevTrait;
    use FloatSoldeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
