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
 * Inverse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInverseTrait {

    /**
     * Inverse.
     *
     * @var bool
     */
    private $inverse;

    /**
     * Get the inverse.
     *
     * @return bool Returns the inverse.
     */
    public function getInverse() {
        return $this->inverse;
    }

    /**
     * Set the inverse.
     *
     * @param bool $inverse The inverse.
     */
    public function setInverse($inverse) {
        $this->inverse = $inverse;
        return $this;
    }
}
