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
 * Superficie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSuperficieTrait {

    /**
     * Superficie.
     *
     * @var float
     */
    private $superficie;

    /**
     * Get the superficie.
     *
     * @return float Returns the superficie.
     */
    public function getSuperficie() {
        return $this->superficie;
    }

    /**
     * Set the superficie.
     *
     * @param float $superficie The superficie.
     */
    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
        return $this;
    }
}
