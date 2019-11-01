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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeAnnuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTtcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeArticle9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille10Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFamille9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModeReglementTrait;

/**
 * Attestation fiscale.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AttestationFiscale {

    use IntAnneeTrait;
    use StringCodeArticle1Trait;
    use StringCodeArticle10Trait;
    use StringCodeArticle2Trait;
    use StringCodeArticle3Trait;
    use StringCodeArticle4Trait;
    use StringCodeArticle5Trait;
    use StringCodeArticle6Trait;
    use StringCodeArticle7Trait;
    use StringCodeArticle8Trait;
    use StringCodeArticle9Trait;
    use StringCodeClientTrait;
    use FloatDureeAnnuelleTrait;
    use StringEtatTrait;
    use StringFamille1Trait;
    use StringFamille10Trait;
    use StringFamille2Trait;
    use StringFamille3Trait;
    use StringFamille4Trait;
    use StringFamille5Trait;
    use StringFamille6Trait;
    use StringFamille7Trait;
    use StringFamille8Trait;
    use StringFamille9Trait;
    use StringLienDocumentTrait;
    use StringModeReglementTrait;
    use FloatMontantTesTrait;
    use FloatMontantTtcTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
