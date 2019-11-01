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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEdiTdfcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsBanqueFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeMandatDateDebutEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMandatDureeEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbPrelevementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeBanqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdCarteAppelEnv2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdCarteAppelEnv3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdCarteAppelEnvTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdCarteAppelRecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMandatPieceJointeEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomIntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Banques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Banques {

    use StringBicTrait;
    use StringCodeBanqueTrait;
    use StringCodeClientTrait;
    use StringCommentaireTrait;
    use BoolEdiTdfcTrait;
    use StringIbanTrait;
    use StringIdCarteAppelEnvTrait;
    use StringIdCarteAppelEnv2Trait;
    use StringIdCarteAppelEnv3Trait;
    use StringIdCarteAppelRecTrait;
    use BoolIsBanqueFactTrait;
    use DateTimeMandatDateDebutEtebacTrait;
    use IntMandatDureeEtebacTrait;
    use StringMandatPieceJointeEtebacTrait;
    use IntNbPrelevementsTrait;
    use StringNomIntTrait;
    use IntNumeroTrait;
    use StringRibTrait;
    use BoolSepaTrait;
    use StringTypeTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
