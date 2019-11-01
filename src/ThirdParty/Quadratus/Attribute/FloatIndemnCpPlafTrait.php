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
 * Indemn cp plaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnCpPlafTrait {

    /**
     * Indemn cp plaf.
     *
     * @var float
     */
    private $indemnCpPlaf;

    /**
     * Get the indemn cp plaf.
     *
     * @return float Returns the indemn cp plaf.
     */
    public function getIndemnCpPlaf() {
        return $this->indemnCpPlaf;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float $indemnCpPlaf The indemn cp plaf.
     */
    public function setIndemnCpPlaf($indemnCpPlaf) {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }
}
