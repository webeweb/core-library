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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAComptabiliserRcitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAComptabiliserRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAppliquerHSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAppliquerReposRemplaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDeclencheRcSemaineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHoraireDepassementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentHSupTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPourcentReposRemplaceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroGrilleTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibHsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePaiementTrait;

/**
 * Tranches h sup.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesHSup {

    use BoolAComptabiliserRcTrait;
    use BoolAComptabiliserRcitTrait;
    use BoolAppliquerHSupTrait;
    use BoolAppliquerReposRemplaceTrait;
    use StringCodeLibHsTrait;
    use DateTimeDateApplicationTrait;
    use BoolDeclencheRcSemaineTrait;
    use FloatHoraireDepassementTrait;
    use IntNumeroGrilleTypeTrait;
    use FloatPourcentHSupTrait;
    use FloatPourcentRcTrait;
    use FloatPourcentReposRemplaceTrait;
    use StringTypePaiementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
