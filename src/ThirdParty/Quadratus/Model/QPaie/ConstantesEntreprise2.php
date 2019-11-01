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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGereEvtFinContratLotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGerePrevNormeDsnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionDsnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNePasActiverPrimeAnnuellePropreteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRegimeMixteMsaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationForfaitSocial8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationFsLisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPrimeAnnuellePropreteMoins20AnsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxPrimeAnnuellePropretePlus20AnsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNEvenementDsnTrait;

/**
 * Constantes entreprise2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2 {

    use DateTimeDateApplicationFsLisseTrait;
    use DateTimeDateApplicationForfaitSocial8Trait;
    use BoolGereEvtFinContratLotTrait;
    use BoolGerePrevNormeDsnTrait;
    use BoolGestionDsnTrait;
    use IntNEvenementDsnTrait;
    use BoolNePasActiverPrimeAnnuellePropreteTrait;
    use BoolRegimeMixteMsaTrait;
    use FloatTauxPrimeAnnuellePropreteMoins20AnsTrait;
    use FloatTauxPrimeAnnuellePropretePlus20AnsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
