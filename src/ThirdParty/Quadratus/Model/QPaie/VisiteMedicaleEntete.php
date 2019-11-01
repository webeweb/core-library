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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRdvJour7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebut1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebut2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutSessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFin1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFin2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinSessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseMtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMedecineTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalMtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDescriptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDureeVisiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLientDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMedecinResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleMtTrait;

/**
 * Visite medicale entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class VisiteMedicaleEntete {

    use StringAdresseMtTrait;
    use StringCodeTrait;
    use StringCodeMedecineTravailTrait;
    use StringCodePostalMtTrait;
    use DateTimeDebut1Trait;
    use DateTimeDebut2Trait;
    use DateTimeDebutSessionTrait;
    use StringDescriptionTrait;
    use StringDureeVisiteTrait;
    use DateTimeFin1Trait;
    use DateTimeFin2Trait;
    use DateTimeFinSessionTrait;
    use StringLientDocumentTrait;
    use StringMedecinResponsableTrait;
    use StringNomMtTrait;
    use BoolRdvJour1Trait;
    use BoolRdvJour2Trait;
    use BoolRdvJour3Trait;
    use BoolRdvJour4Trait;
    use BoolRdvJour5Trait;
    use BoolRdvJour6Trait;
    use BoolRdvJour7Trait;
    use StringTel1Trait;
    use StringVilleMtTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
