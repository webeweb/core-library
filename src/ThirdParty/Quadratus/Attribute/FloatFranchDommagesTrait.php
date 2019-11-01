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
 * Franch dommages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFranchDommagesTrait {

    /**
     * Franch dommages.
     *
     * @var float
     */
    private $franchDommages;

    /**
     * Get the franch dommages.
     *
     * @return float Returns the franch dommages.
     */
    public function getFranchDommages() {
        return $this->franchDommages;
    }

    /**
     * Set the franch dommages.
     *
     * @param float $franchDommages The franch dommages.
     */
    public function setFranchDommages($franchDommages) {
        $this->franchDommages = $franchDommages;
        return $this;
    }
}
