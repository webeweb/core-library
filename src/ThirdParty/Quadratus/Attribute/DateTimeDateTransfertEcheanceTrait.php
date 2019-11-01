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
 * Date transfert echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfertEcheanceTrait {

    /**
     * Date transfert echeance.
     *
     * @var DateTime|null
     */
    private $dateTransfertEcheance;

    /**
     * Get the date transfert echeance.
     *
     * @return DateTime|null Returns the date transfert echeance.
     */
    public function getDateTransfertEcheance() {
        return $this->dateTransfertEcheance;
    }

    /**
     * Set the date transfert echeance.
     *
     * @param DateTime|null $dateTransfertEcheance The date transfert echeance.
     */
    public function setDateTransfertEcheance(DateTime $dateTransfertEcheance = null) {
        $this->dateTransfertEcheance = $dateTransfertEcheance;
        return $this;
    }
}
