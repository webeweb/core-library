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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAncienAssedicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAncienGarpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEmploiDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEmploiFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSignatureDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEffectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomPoleEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomRegimeRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAffiliationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignatureVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;

/**
 * Attestation extras.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationExtras {

    use BoolAncienAssedicTrait;
    use BoolAncienGarpTrait;
    use IntCodeEtablissementTrait;
    use StringCodeMotifRuptureTrait;
    use StringCodeNafTrait;
    use IntEffectifTrait;
    use StringEmploiTrait;
    use StringEtblAdresseTrait;
    use StringEtblRaisonSocialeTrait;
    use StringEtblTelTrait;
    use StringLienDocumentTrait;
    use StringNirTrait;
    use StringNomEmployeTrait;
    use StringNomPoleEmploiTrait;
    use StringNomRegimeRetraiteTrait;
    use StringNumeroAffiliationTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroEmployeTrait;
    use DateTimePeriodeEmploiDebTrait;
    use DateTimePeriodeEmploiFinTrait;
    use StringPrenomTrait;
    use StringSiretTrait;
    use DateTimeSignatureDateTrait;
    use StringSignatureNomTrait;
    use StringSignatureQualiteTrait;
    use StringSignatureVilleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
