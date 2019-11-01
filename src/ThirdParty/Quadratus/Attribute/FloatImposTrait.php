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
 * Impos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatImposTrait {

    /**
     * Impos.
     *
     * @var float
     */
    private $impos;

    /**
     * Get the impos.
     *
     * @return float Returns the impos.
     */
    public function getImpos() {
        return $this->impos;
    }

    /**
     * Set the impos.
     *
     * @param float $impos The impos.
     */
    public function setImpos($impos) {
        $this->impos = $impos;
        return $this;
    }
}
