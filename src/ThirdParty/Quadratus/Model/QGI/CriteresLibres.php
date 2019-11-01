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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase23Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase24Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase25Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase26Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase27Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase28Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase29Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase30Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase31Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase32Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase33Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase34Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase35Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase36Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase37Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase38Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase39Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase40Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase41Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase42Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase43Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase44Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase45Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase46Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase47Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase48Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase49Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase50Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCase9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDate9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur11Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur13Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur15Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur16Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur17Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur19Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeur9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteATrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteBTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteCTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteDTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteETrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteGTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteHTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteITrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteJTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteKTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteLTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteMTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteNTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteOTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTextePTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteQTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteRTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteSTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteTTrait;

/**
 * Criteres libres.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CriteresLibres {

    use BoolCase1Trait;
    use BoolCase10Trait;
    use BoolCase11Trait;
    use BoolCase12Trait;
    use BoolCase13Trait;
    use BoolCase14Trait;
    use BoolCase15Trait;
    use BoolCase16Trait;
    use BoolCase17Trait;
    use BoolCase18Trait;
    use BoolCase19Trait;
    use BoolCase2Trait;
    use BoolCase20Trait;
    use BoolCase21Trait;
    use BoolCase22Trait;
    use BoolCase23Trait;
    use BoolCase24Trait;
    use BoolCase25Trait;
    use BoolCase26Trait;
    use BoolCase27Trait;
    use BoolCase28Trait;
    use BoolCase29Trait;
    use BoolCase3Trait;
    use BoolCase30Trait;
    use BoolCase31Trait;
    use BoolCase32Trait;
    use BoolCase33Trait;
    use BoolCase34Trait;
    use BoolCase35Trait;
    use BoolCase36Trait;
    use BoolCase37Trait;
    use BoolCase38Trait;
    use BoolCase39Trait;
    use BoolCase4Trait;
    use BoolCase40Trait;
    use BoolCase41Trait;
    use BoolCase42Trait;
    use BoolCase43Trait;
    use BoolCase44Trait;
    use BoolCase45Trait;
    use BoolCase46Trait;
    use BoolCase47Trait;
    use BoolCase48Trait;
    use BoolCase49Trait;
    use BoolCase5Trait;
    use BoolCase50Trait;
    use BoolCase6Trait;
    use BoolCase7Trait;
    use BoolCase8Trait;
    use BoolCase9Trait;
    use StringCodeClientTrait;
    use DateTimeDate1Trait;
    use DateTimeDate10Trait;
    use DateTimeDate11Trait;
    use DateTimeDate12Trait;
    use DateTimeDate13Trait;
    use DateTimeDate14Trait;
    use DateTimeDate15Trait;
    use DateTimeDate16Trait;
    use DateTimeDate17Trait;
    use DateTimeDate18Trait;
    use DateTimeDate19Trait;
    use DateTimeDate2Trait;
    use DateTimeDate20Trait;
    use DateTimeDate3Trait;
    use DateTimeDate4Trait;
    use DateTimeDate5Trait;
    use DateTimeDate6Trait;
    use DateTimeDate7Trait;
    use DateTimeDate8Trait;
    use DateTimeDate9Trait;
    use StringTexteATrait;
    use StringTexteBTrait;
    use StringTexteCTrait;
    use StringTexteDTrait;
    use StringTexteETrait;
    use StringTexteFTrait;
    use StringTexteGTrait;
    use StringTexteHTrait;
    use StringTexteITrait;
    use StringTexteJTrait;
    use StringTexteKTrait;
    use StringTexteLTrait;
    use StringTexteMTrait;
    use StringTexteNTrait;
    use StringTexteOTrait;
    use StringTextePTrait;
    use StringTexteQTrait;
    use StringTexteRTrait;
    use StringTexteSTrait;
    use StringTexteTTrait;
    use FloatValeur1Trait;
    use FloatValeur10Trait;
    use FloatValeur11Trait;
    use FloatValeur12Trait;
    use FloatValeur13Trait;
    use FloatValeur14Trait;
    use FloatValeur15Trait;
    use FloatValeur16Trait;
    use FloatValeur17Trait;
    use FloatValeur18Trait;
    use FloatValeur19Trait;
    use FloatValeur2Trait;
    use FloatValeur20Trait;
    use FloatValeur3Trait;
    use FloatValeur4Trait;
    use FloatValeur5Trait;
    use FloatValeur6Trait;
    use FloatValeur7Trait;
    use FloatValeur8Trait;
    use FloatValeur9Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
