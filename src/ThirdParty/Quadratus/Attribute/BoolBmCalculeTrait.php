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
 * Bm calcule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBmCalculeTrait {

    /**
     * Bm calcule.
     *
     * @var bool
     */
    private $bmCalcule;

    /**
     * Get the bm calcule.
     *
     * @return bool Returns the bm calcule.
     */
    public function getBmCalcule() {
        return $this->bmCalcule;
    }

    /**
     * Set the bm calcule.
     *
     * @param bool $bmCalcule The bm calcule.
     */
    public function setBmCalcule($bmCalcule) {
        $this->bmCalcule = $bmCalcule;
        return $this;
    }
}
