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
 * Prochain lot factor trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainLotFactorTrait {

    /**
     * Prochain lot factor.
     *
     * @var int
     */
    private $prochainLotFactor;

    /**
     * Get the prochain lot factor.
     *
     * @return int Returns the prochain lot factor.
     */
    public function getProchainLotFactor() {
        return $this->prochainLotFactor;
    }

    /**
     * Set the prochain lot factor.
     *
     * @param int $prochainLotFactor The prochain lot factor.
     */
    public function setProchainLotFactor($prochainLotFactor) {
        $this->prochainLotFactor = $prochainLotFactor;
        return $this;
    }
}
