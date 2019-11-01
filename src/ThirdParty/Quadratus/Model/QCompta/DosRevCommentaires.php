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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBloquantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEnAttenteReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNeedAnswerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPermanentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtCreationQuestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtCreationReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtModifQuestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtModifReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtTransfertDaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeRevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCptCommentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollModifQuestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollModifReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollQuestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollReponseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTxtQuestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTxtReponseTrait;

/**
 * Dos rev commentaires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevCommentaires {

    use BoolBloquantTrait;
    use StringCodeCollModifQuestionTrait;
    use StringCodeCollModifReponseTrait;
    use StringCodeCollQuestionTrait;
    use StringCodeCollReponseTrait;
    use IntCptCommentTrait;
    use DateTimeDtCreationQuestionTrait;
    use DateTimeDtCreationReponseTrait;
    use DateTimeDtModifQuestionTrait;
    use DateTimeDtModifReponseTrait;
    use DateTimeDtTransfertDaTrait;
    use BoolEnAttenteReponseTrait;
    use BoolNeedAnswerTrait;
    use StringNiveauTrait;
    use DateTimePeriodeRevTrait;
    use BoolPermanentTrait;
    use StringTxtQuestionTrait;
    use StringTxtReponseTrait;
    use IntTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
