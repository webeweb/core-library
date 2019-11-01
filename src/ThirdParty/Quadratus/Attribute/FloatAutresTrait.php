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
 * Autres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresTrait {

    /**
     * Autres.
     *
     * @var float
     */
    private $autres;

    /**
     * Get the autres.
     *
     * @return float Returns the autres.
     */
    public function getAutres() {
        return $this->autres;
    }

    /**
     * Set the autres.
     *
     * @param float $autres The autres.
     */
    public function setAutres($autres) {
        $this->autres = $autres;
        return $this;
    }
}
