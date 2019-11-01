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
 * Mai trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMaiTrait {

    /**
     * Mai.
     *
     * @var float
     */
    private $mai;

    /**
     * Get the mai.
     *
     * @return float Returns the mai.
     */
    public function getMai() {
        return $this->mai;
    }

    /**
     * Set the mai.
     *
     * @param float $mai The mai.
     */
    public function setMai($mai) {
        $this->mai = $mai;
        return $this;
    }
}
