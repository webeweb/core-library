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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAchatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebutAmortissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinAmortissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMiseEnServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAmortissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValAchatEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValAchatFrfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeBarreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMaterielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignation5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroSerieTrait;

/**
 * Materiel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Materiel {

    use StringCodeBarreTrait;
    use StringCodeMaterielTrait;
    use DateTimeDateAchatTrait;
    use DateTimeDateDebutAmortissementTrait;
    use DateTimeDateFinAmortissementTrait;
    use DateTimeDateFinServiceTrait;
    use DateTimeDateMiseEnServiceTrait;
    use StringDesignation1Trait;
    use StringDesignation2Trait;
    use StringDesignation3Trait;
    use StringDesignation4Trait;
    use StringDesignation5Trait;
    use FloatMontantAmortissementTrait;
    use StringNumeroSerieTrait;
    use FloatValAchatEuroTrait;
    use FloatValAchatFrfTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
