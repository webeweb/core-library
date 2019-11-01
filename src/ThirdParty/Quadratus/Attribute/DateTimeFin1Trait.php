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
 * Fin1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFin1Trait {

    /**
     * Fin1.
     *
     * @var DateTime|null
     */
    private $fin1;

    /**
     * Get the fin1.
     *
     * @return DateTime|null Returns the fin1.
     */
    public function getFin1() {
        return $this->fin1;
    }

    /**
     * Set the fin1.
     *
     * @param DateTime|null $fin1 The fin1.
     */
    public function setFin1(DateTime $fin1 = null) {
        $this->fin1 = $fin1;
        return $this;
    }
}
