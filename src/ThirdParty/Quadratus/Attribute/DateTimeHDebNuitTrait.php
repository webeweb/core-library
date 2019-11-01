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
 * H deb nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHDebNuitTrait {

    /**
     * H deb nuit.
     *
     * @var DateTime|null
     */
    private $hDebNuit;

    /**
     * Get the h deb nuit.
     *
     * @return DateTime|null Returns the h deb nuit.
     */
    public function getHDebNuit() {
        return $this->hDebNuit;
    }

    /**
     * Set the h deb nuit.
     *
     * @param DateTime|null $hDebNuit The h deb nuit.
     */
    public function setHDebNuit(DateTime $hDebNuit = null) {
        $this->hDebNuit = $hDebNuit;
        return $this;
    }
}
