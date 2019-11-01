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
 * Indemnite rbt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemniteRbtTrait {

    /**
     * Indemnite rbt.
     *
     * @var float
     */
    private $indemniteRbt;

    /**
     * Get the indemnite rbt.
     *
     * @return float Returns the indemnite rbt.
     */
    public function getIndemniteRbt() {
        return $this->indemniteRbt;
    }

    /**
     * Set the indemnite rbt.
     *
     * @param float $indemniteRbt The indemnite rbt.
     */
    public function setIndemniteRbt($indemniteRbt) {
        $this->indemniteRbt = $indemniteRbt;
        return $this;
    }
}
