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
 * Num lot prov cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotProvCpTrait {

    /**
     * Num lot prov cp.
     *
     * @var int
     */
    private $numLotProvCp;

    /**
     * Get the num lot prov cp.
     *
     * @return int Returns the num lot prov cp.
     */
    public function getNumLotProvCp() {
        return $this->numLotProvCp;
    }

    /**
     * Set the num lot prov cp.
     *
     * @param int $numLotProvCp The num lot prov cp.
     */
    public function setNumLotProvCp($numLotProvCp) {
        $this->numLotProvCp = $numLotProvCp;
        return $this;
    }
}
