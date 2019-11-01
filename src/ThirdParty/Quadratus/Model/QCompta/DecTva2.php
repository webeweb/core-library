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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAs4284BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3510BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3520BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4213BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4215BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4217BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4223BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4226BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4228BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4229BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4237BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4240BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4245BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4252BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4255BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4257BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4258BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4268Base2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4270Base2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4278BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4278Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4279Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4280Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4281BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4281Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4282BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4282Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4283BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4283Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4284Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4285BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4285Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4288BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4288Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4289BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4289Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4290BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4290Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4204NbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4206NbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4207NbKTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4249NbTTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4250NbETrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4279NbKTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4279NbVTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4280NbKTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAz4280NbVTrait;

/**
 * Dec tva2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva2 {

    use FloatAs4284BaseTrait;
    use FloatAz3510BaseTrait;
    use FloatAz3520BaseTrait;
    use IntAz4204NbTrait;
    use IntAz4206NbTrait;
    use IntAz4207NbKTrait;
    use FloatAz4213BaseTrait;
    use FloatAz4215BaseTrait;
    use FloatAz4217BaseTrait;
    use FloatAz4223BaseTrait;
    use FloatAz4226BaseTrait;
    use FloatAz4228BaseTrait;
    use FloatAz4229BaseTrait;
    use FloatAz4237BaseTrait;
    use FloatAz4240BaseTrait;
    use FloatAz4245BaseTrait;
    use IntAz4249NbTTrait;
    use IntAz4250NbETrait;
    use FloatAz4252BaseTrait;
    use FloatAz4255BaseTrait;
    use FloatAz4257BaseTrait;
    use FloatAz4258BaseTrait;
    use FloatAz4268Base2Trait;
    use FloatAz4270Base2Trait;
    use FloatAz4278Trait;
    use FloatAz4278BaseTrait;
    use FloatAz4279Trait;
    use IntAz4279NbKTrait;
    use IntAz4279NbVTrait;
    use FloatAz4280Trait;
    use IntAz4280NbKTrait;
    use IntAz4280NbVTrait;
    use FloatAz4281Trait;
    use FloatAz4281BaseTrait;
    use FloatAz4282Trait;
    use FloatAz4282BaseTrait;
    use FloatAz4283Trait;
    use FloatAz4283BaseTrait;
    use FloatAz4284Trait;
    use FloatAz4285Trait;
    use FloatAz4285BaseTrait;
    use FloatAz4288Trait;
    use FloatAz4288BaseTrait;
    use FloatAz4289Trait;
    use FloatAz4289BaseTrait;
    use FloatAz4290Trait;
    use FloatAz4290BaseTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
