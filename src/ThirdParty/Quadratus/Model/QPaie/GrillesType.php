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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionHNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionJfntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionPlagesHorairesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolModulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolReposRecupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatContingentHSupRcitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatContingentHSupRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeHebdoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeMaxHebdoModulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeMaxHebdoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeMaxMensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeMoyHebdo1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeMoyHebdo2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHNuitTxMajoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeuresDansJourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHjf7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxReposCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeMoyPeriode1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeMoyPeriode2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroGrilleTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibHNuitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHebdoMensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHNuitDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringHNuitFinTrait;

/**
 * Grilles type.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class GrillesType {

    use StringCodeLibHNuitTrait;
    use FloatContingentHSupRcTrait;
    use FloatContingentHSupRcitTrait;
    use DateTimeDateApplicationTrait;
    use DateTimeDateFinTrait;
    use FloatDureeHebdoTrait;
    use FloatDureeMaxHebdoTrait;
    use FloatDureeMaxHebdoModulTrait;
    use FloatDureeMaxMensTrait;
    use FloatDureeMoyHebdo1Trait;
    use FloatDureeMoyHebdo2Trait;
    use IntDureeMoyPeriode1Trait;
    use IntDureeMoyPeriode2Trait;
    use BoolGestionHNuitTrait;
    use BoolGestionJfntTrait;
    use BoolGestionPlagesHorairesTrait;
    use StringHNuitDebTrait;
    use StringHNuitFinTrait;
    use FloatHNuitTxMajoTrait;
    use StringHebdoMensTrait;
    use BoolModulationTrait;
    use FloatNbHjf1Trait;
    use FloatNbHjf2Trait;
    use FloatNbHjf3Trait;
    use FloatNbHjf4Trait;
    use FloatNbHjf5Trait;
    use FloatNbHjf6Trait;
    use FloatNbHjf7Trait;
    use FloatNbHeuresDansJourTrait;
    use IntNumeroGrilleTypeTrait;
    use BoolReposRecupTrait;
    use FloatTauxReposCompTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
