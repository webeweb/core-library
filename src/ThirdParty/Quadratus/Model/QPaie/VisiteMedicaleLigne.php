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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateVisiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureVisiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeVisiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMedecineTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatVisiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeVisiteTrait;

/**
 * Visite medicale ligne.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class VisiteMedicaleLigne {

    use StringCodeMedecineTravailTrait;
    use StringCodeSessionTrait;
    use StringCommentaireTrait;
    use DateTimeDateVisiteTrait;
    use FloatDureeVisiteTrait;
    use StringEtatVisiteTrait;
    use DateTimeHeureVisiteTrait;
    use StringLienDocumentTrait;
    use StringNumeroEmployeTrait;
    use StringTel1Trait;
    use StringTypeLigneTrait;
    use StringTypeVisiteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
