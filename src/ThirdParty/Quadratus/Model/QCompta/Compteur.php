<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbActiviteImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbActiviteImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbActiviteImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAnaImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAnaImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAnaImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAnnexesEditeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAnnexesEditeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAnnexesEditeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBalAgeeImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBalAgeeImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBalAgeeImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBalImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBalImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBalImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBilansEditesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBilansEditesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBilansEditesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCedageEditesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCedageEditesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCedageEditesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCentrImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCentrImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCentrImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEchImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEchImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEchImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbFicAsciiEmisADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbFicAsciiEmisFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbFicAsciiEmisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbGlImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbGlImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbGlImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJrnImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJrnImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbJrnImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLiassesFiscEditeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLiassesFiscEditeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLiassesFiscEditeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLigEtebacTraiteesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLigEtebacTraiteesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbLigEtebacTraiteesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbRelCliImprimeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbRelCliImprimeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbRelCliImprimeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbTabAmortImprimesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbTabAmortImprimesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbTabAmortImprimesTrait;

/**
 * Compteur.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Compteur {

    use IntNbActiviteImprimeesTrait;
    use IntNbActiviteImprimeesADeduireTrait;
    use IntNbActiviteImprimeesFactTrait;
    use IntNbAnaImprimeesTrait;
    use IntNbAnaImprimeesADeduireTrait;
    use IntNbAnaImprimeesFactTrait;
    use IntNbAnnexesEditeesTrait;
    use IntNbAnnexesEditeesADeduireTrait;
    use IntNbAnnexesEditeesFactTrait;
    use IntNbBalAgeeImprimeesTrait;
    use IntNbBalAgeeImprimeesADeduireTrait;
    use IntNbBalAgeeImprimeesFactTrait;
    use IntNbBalImprimeesTrait;
    use IntNbBalImprimeesADeduireTrait;
    use IntNbBalImprimeesFactTrait;
    use IntNbBilansEditesTrait;
    use IntNbBilansEditesADeduireTrait;
    use IntNbBilansEditesFactTrait;
    use IntNbCedageEditesTrait;
    use IntNbCedageEditesADeduireTrait;
    use IntNbCedageEditesFactTrait;
    use IntNbCentrImprimeesTrait;
    use IntNbCentrImprimeesADeduireTrait;
    use IntNbCentrImprimeesFactTrait;
    use IntNbEchImprimeesTrait;
    use IntNbEchImprimeesADeduireTrait;
    use IntNbEchImprimeesFactTrait;
    use IntNbFicAsciiEmisTrait;
    use IntNbFicAsciiEmisADeduireTrait;
    use IntNbFicAsciiEmisFactTrait;
    use IntNbGlImprimeesTrait;
    use IntNbGlImprimeesADeduireTrait;
    use IntNbGlImprimeesFactTrait;
    use IntNbJrnImprimeesTrait;
    use IntNbJrnImprimeesADeduireTrait;
    use IntNbJrnImprimeesFactTrait;
    use IntNbLiassesFiscEditeesTrait;
    use IntNbLiassesFiscEditeesADeduireTrait;
    use IntNbLiassesFiscEditeesFactTrait;
    use IntNbLigEtebacTraiteesTrait;
    use IntNbLigEtebacTraiteesADeduireTrait;
    use IntNbLigEtebacTraiteesFactTrait;
    use IntNbRelCliImprimeesTrait;
    use IntNbRelCliImprimeesADeduireTrait;
    use IntNbRelCliImprimeesFactTrait;
    use IntNbTabAmortImprimesTrait;
    use IntNbTabAmortImprimesADeduireTrait;
    use IntNbTabAmortImprimesFactTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
