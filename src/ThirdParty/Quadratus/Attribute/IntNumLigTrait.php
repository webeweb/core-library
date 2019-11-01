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
 * Num lig trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLigTrait {

    /**
     * Num lig.
     *
     * @var int
     */
    private $numLig;

    /**
     * Get the num lig.
     *
     * @return int Returns the num lig.
     */
    public function getNumLig() {
        return $this->numLig;
    }

    /**
     * Set the num lig.
     *
     * @param int $numLig The num lig.
     */
    public function setNumLig($numLig) {
        $this->numLig = $numLig;
        return $this;
    }
}
