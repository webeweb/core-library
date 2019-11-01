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
 * Duree emploi1 deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDureeEmploi1DebTrait {

    /**
     * Duree emploi1 deb.
     *
     * @var DateTime|null
     */
    private $dureeEmploi1Deb;

    /**
     * Get the duree emploi1 deb.
     *
     * @return DateTime|null Returns the duree emploi1 deb.
     */
    public function getDureeEmploi1Deb() {
        return $this->dureeEmploi1Deb;
    }

    /**
     * Set the duree emploi1 deb.
     *
     * @param DateTime|null $dureeEmploi1Deb The duree emploi1 deb.
     */
    public function setDureeEmploi1Deb(DateTime $dureeEmploi1Deb = null) {
        $this->dureeEmploi1Deb = $dureeEmploi1Deb;
        return $this;
    }
}
