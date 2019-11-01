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
 * Duree emploi1 fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDureeEmploi1FinTrait {

    /**
     * Duree emploi1 fin.
     *
     * @var DateTime|null
     */
    private $dureeEmploi1Fin;

    /**
     * Get the duree emploi1 fin.
     *
     * @return DateTime|null Returns the duree emploi1 fin.
     */
    public function getDureeEmploi1Fin() {
        return $this->dureeEmploi1Fin;
    }

    /**
     * Set the duree emploi1 fin.
     *
     * @param DateTime|null $dureeEmploi1Fin The duree emploi1 fin.
     */
    public function setDureeEmploi1Fin(DateTime $dureeEmploi1Fin = null) {
        $this->dureeEmploi1Fin = $dureeEmploi1Fin;
        return $this;
    }
}
