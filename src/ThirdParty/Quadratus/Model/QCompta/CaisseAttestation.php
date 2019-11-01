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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAcquisitionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntUniqIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInfoFichierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVersionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrdinateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocialeDistriTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocialeSocieteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUtilisateurTrait;

/**
 * Caisse attestation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CaisseAttestation {

    use StringCollaborateurTrait;
    use DateTimeDateAcquisitionTrait;
    use DateTimeDateApplicationTrait;
    use DateTimeDateAttestationTrait;
    use DateTimeDateCreationTrait;
    use StringInfoFichierTrait;
    use StringLicenceTrait;
    use StringNomResponsableTrait;
    use StringNomVilleTrait;
    use StringNumVersionTrait;
    use StringOrdinateurTrait;
    use StringOrigineTrait;
    use StringPrenomResponsableTrait;
    use StringRaisonSocialeDistriTrait;
    use StringRaisonSocialeSocieteTrait;
    use IntUniqIdTrait;
    use StringUtilisateurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
