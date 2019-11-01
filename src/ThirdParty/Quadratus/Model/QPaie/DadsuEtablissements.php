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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFormaProBaseCddTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFormaProBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTaxeApprentissageBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFormaProCodeAssujTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrudTypeDadsuDerogatoireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTaxeApprentissageCodeAssujTrait;

/**
 * Dadsu etablissements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuEtablissements {

    use IntCodeEtablissementTrait;
    use FloatFormaProBaseTrait;
    use FloatFormaProBaseCddTrait;
    use StringFormaProCodeAssujTrait;
    use StringPrudTypeDadsuDerogatoireTrait;
    use FloatTaxeApprentissageBaseTrait;
    use StringTaxeApprentissageCodeAssujTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
