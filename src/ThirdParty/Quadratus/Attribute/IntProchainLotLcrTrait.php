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
 * Prochain lot lcr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainLotLcrTrait {

    /**
     * Prochain lot lcr.
     *
     * @var int
     */
    private $prochainLotLcr;

    /**
     * Get the prochain lot lcr.
     *
     * @return int Returns the prochain lot lcr.
     */
    public function getProchainLotLcr() {
        return $this->prochainLotLcr;
    }

    /**
     * Set the prochain lot lcr.
     *
     * @param int $prochainLotLcr The prochain lot lcr.
     */
    public function setProchainLotLcr($prochainLotLcr) {
        $this->prochainLotLcr = $prochainLotLcr;
        return $this;
    }
}
