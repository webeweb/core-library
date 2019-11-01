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

/**
 * Monnaie tenue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMonnaieTenueTrait {

    /**
     * Monnaie tenue.
     *
     * @var string
     */
    private $monnaieTenue;

    /**
     * Get the monnaie tenue.
     *
     * @return string Returns the monnaie tenue.
     */
    public function getMonnaieTenue() {
        return $this->monnaieTenue;
    }

    /**
     * Set the monnaie tenue.
     *
     * @param string $monnaieTenue The monnaie tenue.
     */
    public function setMonnaieTenue($monnaieTenue) {
        $this->monnaieTenue = $monnaieTenue;
        return $this;
    }
}
