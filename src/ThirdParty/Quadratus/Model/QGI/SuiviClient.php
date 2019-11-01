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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeBilanCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeBullCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDadsUCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDas2CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDcrCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDcrDateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDsiCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDucsAssedicCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDucsUrssafCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFacturationCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric10CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric10DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric1CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric1DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric2CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric2DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric3CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric3DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric4CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric4DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric5CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric5DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric6CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric6DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric7CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric7DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric8CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric8DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric9CommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeGeneric9DateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeIfuCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeImpotRevenuCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeImpotRevenuDateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeIsaCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeIsfCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeIsfDateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeIsrCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeIssCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePlafTpCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePreLibCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePreLibDateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSituationCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSituationDateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTabBordCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTabBordDateLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTpCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTsaCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTssCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTvaCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeTvsCommentaireDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBilanCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBullCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDadsUCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDas2CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDcrCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDsiCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDucsAssedicCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDucsUrssafCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFacturationCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitBilanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitCvaeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitDas2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitDcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitGeneric9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitIfuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitImpotRevenuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitIsaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitIsfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitIsrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitIssTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitPlafTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitPreLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitSituationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitTabBordTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaitTvsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric10CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric1CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric2CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric3CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric4CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric5CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric6CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric7CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric8CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGeneric9CommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIfuCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImpotRevenuCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIsaCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIsfCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIsrCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIssCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPlafTpCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPreLibCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSituationCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTabBordCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTpCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTsaCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTssCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvaCommentaireLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTvsCommentaireLibTrait;

/**
 * Suivi client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SuiviClient {

    use DateTimeBilanCommentaireDateTrait;
    use StringBilanCommentaireLibTrait;
    use DateTimeBullCommentaireDateTrait;
    use StringBullCommentaireLibTrait;
    use StringCodeClientTrait;
    use DateTimeDas2CommentaireDateTrait;
    use StringDas2CommentaireLibTrait;
    use DateTimeDcrCommentaireDateTrait;
    use StringDcrCommentaireLibTrait;
    use DateTimeDcrDateLimiteTrait;
    use DateTimeDsiCommentaireDateTrait;
    use StringDsiCommentaireLibTrait;
    use DateTimeDadsUCommentaireDateTrait;
    use StringDadsUCommentaireLibTrait;
    use DateTimeDateModifTrait;
    use DateTimeDucsAssedicCommentaireDateTrait;
    use StringDucsAssedicCommentaireLibTrait;
    use DateTimeDucsUrssafCommentaireDateTrait;
    use StringDucsUrssafCommentaireLibTrait;
    use DateTimeFacturationCommentaireDateTrait;
    use StringFacturationCommentaireLibTrait;
    use StringFaitBilanTrait;
    use StringFaitCvaeTrait;
    use StringFaitDas2Trait;
    use StringFaitDcrTrait;
    use StringFaitGeneric1Trait;
    use StringFaitGeneric10Trait;
    use StringFaitGeneric2Trait;
    use StringFaitGeneric3Trait;
    use StringFaitGeneric4Trait;
    use StringFaitGeneric5Trait;
    use StringFaitGeneric6Trait;
    use StringFaitGeneric7Trait;
    use StringFaitGeneric8Trait;
    use StringFaitGeneric9Trait;
    use StringFaitIfuTrait;
    use StringFaitIsaTrait;
    use StringFaitIsfTrait;
    use StringFaitIsrTrait;
    use StringFaitIssTrait;
    use StringFaitImpotRevenuTrait;
    use StringFaitPlafTpTrait;
    use StringFaitPreLibTrait;
    use StringFaitSituationTrait;
    use StringFaitTpTrait;
    use StringFaitTvaTrait;
    use StringFaitTvsTrait;
    use StringFaitTabBordTrait;
    use DateTimeGeneric10CommentaireDateTrait;
    use StringGeneric10CommentaireLibTrait;
    use DateTimeGeneric10DateLimiteTrait;
    use DateTimeGeneric1CommentaireDateTrait;
    use StringGeneric1CommentaireLibTrait;
    use DateTimeGeneric1DateLimiteTrait;
    use DateTimeGeneric2CommentaireDateTrait;
    use StringGeneric2CommentaireLibTrait;
    use DateTimeGeneric2DateLimiteTrait;
    use DateTimeGeneric3CommentaireDateTrait;
    use StringGeneric3CommentaireLibTrait;
    use DateTimeGeneric3DateLimiteTrait;
    use DateTimeGeneric4CommentaireDateTrait;
    use StringGeneric4CommentaireLibTrait;
    use DateTimeGeneric4DateLimiteTrait;
    use DateTimeGeneric5CommentaireDateTrait;
    use StringGeneric5CommentaireLibTrait;
    use DateTimeGeneric5DateLimiteTrait;
    use DateTimeGeneric6CommentaireDateTrait;
    use StringGeneric6CommentaireLibTrait;
    use DateTimeGeneric6DateLimiteTrait;
    use DateTimeGeneric7CommentaireDateTrait;
    use StringGeneric7CommentaireLibTrait;
    use DateTimeGeneric7DateLimiteTrait;
    use DateTimeGeneric8CommentaireDateTrait;
    use StringGeneric8CommentaireLibTrait;
    use DateTimeGeneric8DateLimiteTrait;
    use DateTimeGeneric9CommentaireDateTrait;
    use StringGeneric9CommentaireLibTrait;
    use DateTimeGeneric9DateLimiteTrait;
    use DateTimeIfuCommentaireDateTrait;
    use StringIfuCommentaireLibTrait;
    use DateTimeIsaCommentaireDateTrait;
    use StringIsaCommentaireLibTrait;
    use DateTimeIsfCommentaireDateTrait;
    use StringIsfCommentaireLibTrait;
    use DateTimeIsfDateLimiteTrait;
    use DateTimeIsrCommentaireDateTrait;
    use StringIsrCommentaireLibTrait;
    use DateTimeIssCommentaireDateTrait;
    use StringIssCommentaireLibTrait;
    use DateTimeImpotRevenuCommentaireDateTrait;
    use StringImpotRevenuCommentaireLibTrait;
    use DateTimeImpotRevenuDateLimiteTrait;
    use DateTimePeriodeTrait;
    use DateTimePlafTpCommentaireDateTrait;
    use StringPlafTpCommentaireLibTrait;
    use DateTimePreLibCommentaireDateTrait;
    use StringPreLibCommentaireLibTrait;
    use DateTimePreLibDateLimiteTrait;
    use DateTimeSituationCommentaireDateTrait;
    use StringSituationCommentaireLibTrait;
    use DateTimeSituationDateLimiteTrait;
    use DateTimeTpCommentaireDateTrait;
    use StringTpCommentaireLibTrait;
    use DateTimeTsaCommentaireDateTrait;
    use StringTsaCommentaireLibTrait;
    use DateTimeTssCommentaireDateTrait;
    use StringTssCommentaireLibTrait;
    use DateTimeTvsCommentaireDateTrait;
    use StringTvsCommentaireLibTrait;
    use DateTimeTabBordCommentaireDateTrait;
    use StringTabBordCommentaireLibTrait;
    use DateTimeTabBordDateLimiteTrait;
    use DateTimeTvaCommentaireDateTrait;
    use StringTvaCommentaireLibTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
