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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesAssedicADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesAssedicFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesAssedicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesIjssADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesIjssAtaDeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesIjssAtFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesIjssAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesIjssFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttesIjssTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttestEmploiADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttestEmploiFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbAttestEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBulEditesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBulEditesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBulEditesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBulValidesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBulValidesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBulValidesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCertifTravailADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCertifTravailFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbCertifTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDadsEditeesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDadsEditeesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDadsEditeesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDisquettesVirementsADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDisquettesVirementsFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDisquettesVirementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnEvtArretADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnEvtArretFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnEvtArretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnEvtFinContratADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnEvtFinContratFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnEvtFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnMensuelleADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnMensuelleFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDsnMensuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDueaDeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDueFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbDueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbSoldeToutCompteADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbSoldeToutCompteFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbSoldeToutCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbTdsRealiseesADeduireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbTdsRealiseesFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbTdsRealiseesTrait;

/**
 * Compteur.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Compteur {

    use IntNbAttesAssedicTrait;
    use IntNbAttesAssedicADeduireTrait;
    use IntNbAttesAssedicFactTrait;
    use IntNbAttesIjssTrait;
    use IntNbAttesIjssADeduireTrait;
    use IntNbAttesIjssAtTrait;
    use IntNbAttesIjssAtaDeduireTrait;
    use IntNbAttesIjssAtFactTrait;
    use IntNbAttesIjssFactTrait;
    use IntNbAttestEmploiTrait;
    use IntNbAttestEmploiADeduireTrait;
    use IntNbAttestEmploiFactTrait;
    use IntNbBulEditesTrait;
    use IntNbBulEditesADeduireTrait;
    use IntNbBulEditesFactTrait;
    use IntNbBulValidesTrait;
    use IntNbBulValidesADeduireTrait;
    use IntNbBulValidesFactTrait;
    use IntNbCertifTravailTrait;
    use IntNbCertifTravailADeduireTrait;
    use IntNbCertifTravailFactTrait;
    use IntNbDadsEditeesTrait;
    use IntNbDadsEditeesADeduireTrait;
    use IntNbDadsEditeesFactTrait;
    use IntNbDsnEvtArretTrait;
    use IntNbDsnEvtArretADeduireTrait;
    use IntNbDsnEvtArretFactTrait;
    use IntNbDsnEvtFinContratTrait;
    use IntNbDsnEvtFinContratADeduireTrait;
    use IntNbDsnEvtFinContratFactTrait;
    use IntNbDsnMensuelleTrait;
    use IntNbDsnMensuelleADeduireTrait;
    use IntNbDsnMensuelleFactTrait;
    use IntNbDueTrait;
    use IntNbDueaDeduireTrait;
    use IntNbDueFactTrait;
    use IntNbDisquettesVirementsTrait;
    use IntNbDisquettesVirementsADeduireTrait;
    use IntNbDisquettesVirementsFactTrait;
    use IntNbSoldeToutCompteTrait;
    use IntNbSoldeToutCompteADeduireTrait;
    use IntNbSoldeToutCompteFactTrait;
    use IntNbTdsRealiseesTrait;
    use IntNbTdsRealiseesADeduireTrait;
    use IntNbTdsRealiseesFactTrait;
    use DateTimePeriodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
