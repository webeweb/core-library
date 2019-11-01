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
 * Calculee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCalculeeTrait {

    /**
     * Calculee.
     *
     * @var bool
     */
    private $calculee;

    /**
     * Get the calculee.
     *
     * @return bool Returns the calculee.
     */
    public function getCalculee() {
        return $this->calculee;
    }

    /**
     * Set the calculee.
     *
     * @param bool $calculee The calculee.
     */
    public function setCalculee($calculee) {
        $this->calculee = $calculee;
        return $this;
    }
}
