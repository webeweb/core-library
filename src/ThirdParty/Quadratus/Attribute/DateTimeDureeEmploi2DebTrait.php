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
 * Duree emploi2 deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDureeEmploi2DebTrait {

    /**
     * Duree emploi2 deb.
     *
     * @var DateTime|null
     */
    private $dureeEmploi2Deb;

    /**
     * Get the duree emploi2 deb.
     *
     * @return DateTime|null Returns the duree emploi2 deb.
     */
    public function getDureeEmploi2Deb() {
        return $this->dureeEmploi2Deb;
    }

    /**
     * Set the duree emploi2 deb.
     *
     * @param DateTime|null $dureeEmploi2Deb The duree emploi2 deb.
     */
    public function setDureeEmploi2Deb(DateTime $dureeEmploi2Deb = null) {
        $this->dureeEmploi2Deb = $dureeEmploi2Deb;
        return $this;
    }
}
