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
 * Remise a zero trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemiseAZeroTrait {

    /**
     * Remise a zero.
     *
     * @var bool
     */
    private $remiseAZero;

    /**
     * Get the remise a zero.
     *
     * @return bool Returns the remise a zero.
     */
    public function getRemiseAZero() {
        return $this->remiseAZero;
    }

    /**
     * Set the remise a zero.
     *
     * @param bool $remiseAZero The remise a zero.
     */
    public function setRemiseAZero($remiseAZero) {
        $this->remiseAZero = $remiseAZero;
        return $this;
    }
}
