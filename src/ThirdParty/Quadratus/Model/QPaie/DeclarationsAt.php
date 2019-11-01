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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtAccouchementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebCongesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtEmbaucheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinCongesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinPreavisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSignDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDeductForfaitTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMtSalaireBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblSignatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMemoAccidentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMemoCorrespondanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDatTrait;

/**
 * Declarations at.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationsAt {

    use StringAdresseTrait;
    use StringCategorieTrait;
    use StringCodeEtablissementTrait;
    use StringCodePostalTrait;
    use StringCommuneTrait;
    use StringComplementTrait;
    use DateTimeDateNaissanceTrait;
    use IntDeductForfaitTrait;
    use DateTimeDtAccouchementTrait;
    use DateTimeDtDebAtTrait;
    use DateTimeDtDebCongesTrait;
    use DateTimeDtEmbaucheTrait;
    use DateTimeDtFinCongesTrait;
    use DateTimeDtFinContratTrait;
    use DateTimeDtFinPreavisTrait;
    use StringEtblNomTrait;
    use StringEtblResponsableTrait;
    use StringEtblSiretTrait;
    use StringEtblSignatureTrait;
    use StringEtblTelTrait;
    use StringLienDocumentTrait;
    use StringMemoAccidentTrait;
    use StringMemoCorrespondanceTrait;
    use StringMotifAtTrait;
    use IntMtSalaireBrutTrait;
    use StringNirTrait;
    use StringNomTrait;
    use StringNumDatTrait;
    use StringNumeroEmployeTrait;
    use StringPrenomTrait;
    use DateTimeSignDateTrait;
    use StringTypeDatTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
