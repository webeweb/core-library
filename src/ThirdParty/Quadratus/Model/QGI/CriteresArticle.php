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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBooleen9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDouble9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLong9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRef9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexte9Trait;

/**
 * Criteres article.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CriteresArticle {

    use BoolBooleen1Trait;
    use BoolBooleen10Trait;
    use BoolBooleen2Trait;
    use BoolBooleen3Trait;
    use BoolBooleen4Trait;
    use BoolBooleen5Trait;
    use BoolBooleen6Trait;
    use BoolBooleen7Trait;
    use BoolBooleen8Trait;
    use BoolBooleen9Trait;
    use StringCodeArticleTrait;
    use StringCodeRef1Trait;
    use StringCodeRef10Trait;
    use StringCodeRef2Trait;
    use StringCodeRef3Trait;
    use StringCodeRef4Trait;
    use StringCodeRef5Trait;
    use StringCodeRef6Trait;
    use StringCodeRef7Trait;
    use StringCodeRef8Trait;
    use StringCodeRef9Trait;
    use DateTimeDate1Trait;
    use DateTimeDate10Trait;
    use DateTimeDate2Trait;
    use DateTimeDate3Trait;
    use DateTimeDate4Trait;
    use DateTimeDate5Trait;
    use DateTimeDate6Trait;
    use DateTimeDate7Trait;
    use DateTimeDate8Trait;
    use DateTimeDate9Trait;
    use FloatDouble1Trait;
    use FloatDouble10Trait;
    use FloatDouble2Trait;
    use FloatDouble3Trait;
    use FloatDouble4Trait;
    use FloatDouble5Trait;
    use FloatDouble6Trait;
    use FloatDouble7Trait;
    use FloatDouble8Trait;
    use FloatDouble9Trait;
    use IntLong1Trait;
    use IntLong10Trait;
    use IntLong2Trait;
    use IntLong3Trait;
    use IntLong4Trait;
    use IntLong5Trait;
    use IntLong6Trait;
    use IntLong7Trait;
    use IntLong8Trait;
    use IntLong9Trait;
    use StringTexte1Trait;
    use StringTexte10Trait;
    use StringTexte2Trait;
    use StringTexte3Trait;
    use StringTexte4Trait;
    use StringTexte5Trait;
    use StringTexte6Trait;
    use StringTexte7Trait;
    use StringTexte8Trait;
    use StringTexte9Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
