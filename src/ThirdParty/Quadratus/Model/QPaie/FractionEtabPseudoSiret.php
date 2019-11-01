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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAPartirDeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumFractionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPseudoSiretTrait;

/**
 * Fraction etab pseudo siret.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class FractionEtabPseudoSiret {

    use DateTimeAPartirDeTrait;
    use IntCodeEtablissementTrait;
    use StringNumFractionTrait;
    use StringPseudoSiretTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
