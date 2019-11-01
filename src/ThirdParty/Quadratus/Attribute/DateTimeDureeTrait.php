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
 * Duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDureeTrait {

    /**
     * Duree.
     *
     * @var DateTime|null
     */
    private $duree;

    /**
     * Get the duree.
     *
     * @return DateTime|null Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Set the duree.
     *
     * @param DateTime|null $duree The duree.
     */
    public function setDuree(DateTime $duree = null) {
        $this->duree = $duree;
        return $this;
    }
}
