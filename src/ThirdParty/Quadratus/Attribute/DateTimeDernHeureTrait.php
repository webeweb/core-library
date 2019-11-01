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
 * Dern heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDernHeureTrait {

    /**
     * Dern heure.
     *
     * @var DateTime|null
     */
    private $dernHeure;

    /**
     * Get the dern heure.
     *
     * @return DateTime|null Returns the dern heure.
     */
    public function getDernHeure() {
        return $this->dernHeure;
    }

    /**
     * Set the dern heure.
     *
     * @param DateTime|null $dernHeure The dern heure.
     */
    public function setDernHeure(DateTime $dernHeure = null) {
        $this->dernHeure = $dernHeure;
        return $this;
    }
}
