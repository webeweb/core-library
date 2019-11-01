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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTJeudiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTLundiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTMardiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTMercrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTVendrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHJeudiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHLundiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMardiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiJeudiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiLundiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiMardiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiMercrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxiVendrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMercrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniJeudiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniLundiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniMardiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniMercrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHMiniVendrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbreHVendrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroSemTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;

/**
 * Horaire theorique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class HoraireTheorique {

    use IntAnneeTrait;
    use StringCodeTrait;
    use FloatNbreHTrait;
    use FloatNbreHDimancheTrait;
    use FloatNbreHJeudiTrait;
    use FloatNbreHLundiTrait;
    use FloatNbreHMardiTrait;
    use FloatNbreHMaxTrait;
    use FloatNbreHMaxiDimancheTrait;
    use FloatNbreHMaxiJeudiTrait;
    use FloatNbreHMaxiLundiTrait;
    use FloatNbreHMaxiMardiTrait;
    use FloatNbreHMaxiMercrediTrait;
    use FloatNbreHMaxiSamediTrait;
    use FloatNbreHMaxiVendrediTrait;
    use FloatNbreHMercrediTrait;
    use FloatNbreHMiniTrait;
    use FloatNbreHMiniDimancheTrait;
    use FloatNbreHMiniJeudiTrait;
    use FloatNbreHMiniLundiTrait;
    use FloatNbreHMiniMardiTrait;
    use FloatNbreHMiniMercrediTrait;
    use FloatNbreHMiniSamediTrait;
    use FloatNbreHMiniVendrediTrait;
    use FloatNbreHSamediTrait;
    use FloatNbreHVendrediTrait;
    use IntNumeroSemTrait;
    use BoolTDimancheTrait;
    use BoolTJeudiTrait;
    use BoolTLundiTrait;
    use BoolTMardiTrait;
    use BoolTMercrediTrait;
    use BoolTSamediTrait;
    use BoolTVendrediTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
