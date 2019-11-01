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
 * Fin2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFin2Trait {

    /**
     * Fin2.
     *
     * @var DateTime|null
     */
    private $fin2;

    /**
     * Get the fin2.
     *
     * @return DateTime|null Returns the fin2.
     */
    public function getFin2() {
        return $this->fin2;
    }

    /**
     * Set the fin2.
     *
     * @param DateTime|null $fin2 The fin2.
     */
    public function setFin2(DateTime $fin2 = null) {
        $this->fin2 = $fin2;
        return $this;
    }
}
