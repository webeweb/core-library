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
 * Periodicite debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodiciteDebutTrait {

    /**
     * Periodicite debut.
     *
     * @var DateTime|null
     */
    private $periodiciteDebut;

    /**
     * Get the periodicite debut.
     *
     * @return DateTime|null Returns the periodicite debut.
     */
    public function getPeriodiciteDebut() {
        return $this->periodiciteDebut;
    }

    /**
     * Set the periodicite debut.
     *
     * @param DateTime|null $periodiciteDebut The periodicite debut.
     */
    public function setPeriodiciteDebut(DateTime $periodiciteDebut = null) {
        $this->periodiciteDebut = $periodiciteDebut;
        return $this;
    }
}
