<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

use DateTime;

/**
 * Date echeance contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEcheanceContratTrait {

    /**
     * Date echeance contrat.
     *
     * @var DateTime|null
     */
    private $dateEcheanceContrat;

    /**
     * Get the date echeance contrat.
     *
     * @return DateTime|null Returns the date echeance contrat.
     */
    public function getDateEcheanceContrat() {
        return $this->dateEcheanceContrat;
    }

    /**
     * Set the date echeance contrat.
     *
     * @param DateTime|null $dateEcheanceContrat The date echeance contrat.
     */
    public function setDateEcheanceContrat(DateTime $dateEcheanceContrat = null) {
        $this->dateEcheanceContrat = $dateEcheanceContrat;
        return $this;
    }
}
