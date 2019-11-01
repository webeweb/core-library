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
 * H fin nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHFinNuitTrait {

    /**
     * H fin nuit.
     *
     * @var DateTime|null
     */
    private $hFinNuit;

    /**
     * Get the h fin nuit.
     *
     * @return DateTime|null Returns the h fin nuit.
     */
    public function getHFinNuit() {
        return $this->hFinNuit;
    }

    /**
     * Set the h fin nuit.
     *
     * @param DateTime|null $hFinNuit The h fin nuit.
     */
    public function setHFinNuit(DateTime $hFinNuit = null) {
        $this->hFinNuit = $hFinNuit;
        return $this;
    }
}
