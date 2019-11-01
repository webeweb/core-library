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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolQuePremiereAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroFreqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeControleTrait;

/**
 * Chantiers frequences controles qualite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersFrequencesControlesQualite {

    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringJourTrait;
    use StringMoisTrait;
    use IntNumeroFreqTrait;
    use BoolQuePremiereAnneeTrait;
    use StringTypeControleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
