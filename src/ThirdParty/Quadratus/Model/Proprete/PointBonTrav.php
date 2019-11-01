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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvenantSigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFromGenBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolValideMobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePassageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRefBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebMobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeureFinMobTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeuresJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeHeuresNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPaniersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrime3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumChronoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroAvenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEquipeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTacheTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransfertPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Point bon trav.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointBonTrav {

    use BoolAvenantSigneTrait;
    use StringCodeEmployeTrait;
    use StringCodeEquipeTrait;
    use StringCodeTacheTypeTrait;
    use DateTimeDatePassageTrait;
    use DateTimeDateRefBtTrait;
    use StringEtatTrait;
    use BoolFromGenBtTrait;
    use DateTimeHeureDebTrait;
    use DateTimeHeureDebMobTrait;
    use DateTimeHeureFinMobTrait;
    use DateTimeHeuresJourTrait;
    use DateTimeHeuresNuitTrait;
    use FloatMontantTrait;
    use StringNomPrenomTrait;
    use IntNumBtTrait;
    use IntNumChronoTrait;
    use IntNumeroAvenantTrait;
    use FloatPaniersTrait;
    use FloatPrime1Trait;
    use FloatPrime2Trait;
    use FloatPrime3Trait;
    use StringQualificationTrait;
    use StringTransfertPaieTrait;
    use StringUniqIdTrait;
    use BoolValideMobTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
