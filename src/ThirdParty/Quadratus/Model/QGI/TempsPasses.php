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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFacturableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsTransfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTauxRemiseIciTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolValideTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSysSaisieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEditionNdFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeValideDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCoutKmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantCrtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbKmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbUoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPv1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPv2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPv3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatQteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRemiseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIdTpsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePhaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVehiculeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGUniqIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringValideCollabTrait;

/**
 * Temps passes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TempsPasses {

    use StringCodeClientTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeMissionTrait;
    use StringCodePhaseTrait;
    use StringCodeTacheTrait;
    use StringCodeVehiculeTrait;
    use FloatCoutKmTrait;
    use DateTimeDateSaisieTrait;
    use DateTimeDateSysSaisieTrait;
    use IntEtatTrait;
    use BoolFacturableTrait;
    use StringGUniqIdTrait;
    use DateTimeHeureDebutTrait;
    use DateTimeHeureFinTrait;
    use IntIdTpsTrait;
    use BoolIsTransfTrait;
    use StringLibelleTrait;
    use StringMonnaieTrait;
    use FloatMontantCrtTrait;
    use FloatMontantTvaTrait;
    use FloatNbKmTrait;
    use FloatNbUoTrait;
    use FloatPuTrait;
    use FloatPv1Trait;
    use FloatPv2Trait;
    use FloatPv3Trait;
    use DateTimePeriodeEditionNdFTrait;
    use FloatQteTrait;
    use FloatTauxRemiseTrait;
    use BoolTauxRemiseIciTrait;
    use StringUniqIdFactureTrait;
    use BoolValideTrait;
    use StringValideCollabTrait;
    use DateTimeValideDateTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
