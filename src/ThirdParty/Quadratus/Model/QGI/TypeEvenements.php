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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAvecEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtatCouleur1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtatCouleur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtatCouleur3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatPriorite1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatPriorite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatPriorite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPosFlagTrait;

/**
 * Type evenements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TypeEvenements {

    use BoolAvecEtatTrait;
    use StringCodeTrait;
    use IntEtatCouleur1Trait;
    use IntEtatCouleur2Trait;
    use IntEtatCouleur3Trait;
    use StringEtatPriorite1Trait;
    use StringEtatPriorite2Trait;
    use StringEtatPriorite3Trait;
    use StringLibelleTrait;
    use StringLibelle1Trait;
    use StringLibelle2Trait;
    use StringLibelle3Trait;
    use StringLibelleEtatTrait;
    use StringPosFlagTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
