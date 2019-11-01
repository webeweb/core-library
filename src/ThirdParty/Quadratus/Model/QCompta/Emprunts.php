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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDiffereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEmpruntEnFrancsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTypeInFineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateOuvertureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePremiereEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantEmprunteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtCapitalFixeRembTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxInteretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAEchoirEchuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentreAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptAssuranceEmpruntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptEmpruntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptInteretEmpruntTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoisAnneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodiciteTrait;

/**
 * Emprunts.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Emprunts {

    use StringAEchoirEchuTrait;
    use StringCategorieTrait;
    use StringCentreAnalytiqueTrait;
    use StringCodeJournalTrait;
    use StringCptAssuranceEmpruntTrait;
    use StringCptEmpruntTrait;
    use StringCptInteretEmpruntTrait;
    use DateTimeDateOuvertureTrait;
    use DateTimeDatePremiereEcheanceTrait;
    use BoolDiffereTrait;
    use IntDureeTrait;
    use BoolEmpruntEnFrancsTrait;
    use StringIdentificationTrait;
    use StringMoisAnneeTrait;
    use FloatMontantAssuranceTrait;
    use FloatMontantEmprunteTrait;
    use FloatMtCapitalFixeRembTrait;
    use StringNatureTrait;
    use StringNatureAnalytiqueTrait;
    use IntNumeroTrait;
    use IntNumeroPjTrait;
    use StringOrganismeTrait;
    use StringPeriodiciteTrait;
    use FloatTauxAssuranceTrait;
    use FloatTauxInteretTrait;
    use BoolTypeInFineTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
