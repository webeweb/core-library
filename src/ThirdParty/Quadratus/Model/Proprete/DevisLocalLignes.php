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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAouTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDimancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJeudiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuilTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolJuinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLundiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMaiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMardiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMercrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNovTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolOctTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSamediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolVendrediTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneLocalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeProgrammeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOccurrenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodiciteTrait;

/**
 * Devis local lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisLocalLignes {

    use BoolAouTrait;
    use BoolAvrTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeProgrammeTrait;
    use BoolDecTrait;
    use StringDesignationTrait;
    use BoolDimancheTrait;
    use BoolFevTrait;
    use BoolJanTrait;
    use BoolJeudiTrait;
    use BoolJuilTrait;
    use BoolJuinTrait;
    use BoolLundiTrait;
    use BoolMaiTrait;
    use BoolMarTrait;
    use BoolMardiTrait;
    use BoolMercrediTrait;
    use BoolNovTrait;
    use StringNumDevisTrait;
    use IntNumLigneTrait;
    use IntNumLigneLocalTrait;
    use StringOccurrenceTrait;
    use BoolOctTrait;
    use StringPeriodiciteTrait;
    use BoolSamediTrait;
    use BoolSepTrait;
    use BoolVendrediTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
