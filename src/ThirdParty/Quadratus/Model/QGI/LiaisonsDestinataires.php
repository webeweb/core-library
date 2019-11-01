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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAgenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCheminTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMachineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotDePasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPartageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelectionArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelectionClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelectionFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLiaisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUtilisateurTrait;

/**
 * Liaisons destinataires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsDestinataires {

    use BoolAgenceTrait;
    use StringCheminTrait;
    use StringCodeTrait;
    use StringEmailTrait;
    use StringIntituleTrait;
    use StringMachineTrait;
    use StringMotDePasseTrait;
    use StringPartageTrait;
    use StringSelectionArticleTrait;
    use StringSelectionClientTrait;
    use StringSelectionFournisseurTrait;
    use StringTypeLiaisonTrait;
    use StringUtilisateurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
