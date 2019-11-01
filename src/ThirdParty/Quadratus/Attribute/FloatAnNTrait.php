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
 * An n trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAnNTrait {

    /**
     * An n.
     *
     * @var float
     */
    private $anN;

    /**
     * Get the an n.
     *
     * @return float Returns the an n.
     */
    public function getAnN() {
        return $this->anN;
    }

    /**
     * Set the an n.
     *
     * @param float $anN The an n.
     */
    public function setAnN($anN) {
        $this->anN = $anN;
        return $this;
    }
}
