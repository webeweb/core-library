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
 * Date demande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDemandeTrait {

    /**
     * Date demande.
     *
     * @var DateTime|null
     */
    private $dateDemande;

    /**
     * Get the date demande.
     *
     * @return DateTime|null Returns the date demande.
     */
    public function getDateDemande() {
        return $this->dateDemande;
    }

    /**
     * Set the date demande.
     *
     * @param DateTime|null $dateDemande The date demande.
     */
    public function setDateDemande(DateTime $dateDemande = null) {
        $this->dateDemande = $dateDemande;
        return $this;
    }
}
