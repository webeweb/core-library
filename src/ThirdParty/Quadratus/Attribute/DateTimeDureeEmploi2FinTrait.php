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
 * Duree emploi2 fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDureeEmploi2FinTrait {

    /**
     * Duree emploi2 fin.
     *
     * @var DateTime|null
     */
    private $dureeEmploi2Fin;

    /**
     * Get the duree emploi2 fin.
     *
     * @return DateTime|null Returns the duree emploi2 fin.
     */
    public function getDureeEmploi2Fin() {
        return $this->dureeEmploi2Fin;
    }

    /**
     * Set the duree emploi2 fin.
     *
     * @param DateTime|null $dureeEmploi2Fin The duree emploi2 fin.
     */
    public function setDureeEmploi2Fin(DateTime $dureeEmploi2Fin = null) {
        $this->dureeEmploi2Fin = $dureeEmploi2Fin;
        return $this;
    }
}
