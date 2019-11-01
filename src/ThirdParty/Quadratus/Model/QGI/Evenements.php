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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolArchiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFsComptaYaAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFsSocialYaAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRegleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEvtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsComptaDateAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsComptaDateArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsFiscalDateArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsgiDateArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsJuridiqueDateArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsSocialDateAlerteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFsSocialDateArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContenu1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContenu2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContenu3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContenu4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmplacementFichierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatIsActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsComptaCollArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsFiscalCollArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsFiscalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsgiCollArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsgiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsJuridiqueCollArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsSocialCollArchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFsSocialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifiant1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifiant2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifiant3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRacineCptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeEvtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Evenements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Evenements {

    use BoolArchiveTrait;
    use StringCodeClientTrait;
    use StringCodeCollabTrait;
    use StringContenu1Trait;
    use StringContenu2Trait;
    use StringContenu3Trait;
    use StringContenu4Trait;
    use DateTimeDateEvtTrait;
    use StringEmplacementFichierTrait;
    use StringEtatIsActifTrait;
    use StringFsComptaTrait;
    use DateTimeFsComptaDateAlerteTrait;
    use BoolFsComptaYaAlerteTrait;
    use StringFsComptaCollArchTrait;
    use DateTimeFsComptaDateArchTrait;
    use StringFsFiscalTrait;
    use StringFsFiscalCollArchTrait;
    use DateTimeFsFiscalDateArchTrait;
    use StringFsgiTrait;
    use StringFsgiCollArchTrait;
    use DateTimeFsgiDateArchTrait;
    use StringFsJuridiqueTrait;
    use StringFsJuridiqueCollArchTrait;
    use DateTimeFsJuridiqueDateArchTrait;
    use StringFsSocialTrait;
    use DateTimeFsSocialDateAlerteTrait;
    use BoolFsSocialYaAlerteTrait;
    use StringFsSocialCollArchTrait;
    use DateTimeFsSocialDateArchTrait;
    use StringLibelleTrait;
    use IntNumeroTrait;
    use StringQualifiant1Trait;
    use StringQualifiant2Trait;
    use StringQualifiant3Trait;
    use StringRacineCptTrait;
    use BoolRegleTrait;
    use StringTitreTrait;
    use StringTypeEvtTrait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
