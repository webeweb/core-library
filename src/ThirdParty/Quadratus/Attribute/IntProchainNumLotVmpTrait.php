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
 * Prochain num lot vmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumLotVmpTrait {

    /**
     * Prochain num lot vmp.
     *
     * @var int
     */
    private $prochainNumLotVmp;

    /**
     * Get the prochain num lot vmp.
     *
     * @return int Returns the prochain num lot vmp.
     */
    public function getProchainNumLotVmp() {
        return $this->prochainNumLotVmp;
    }

    /**
     * Set the prochain num lot vmp.
     *
     * @param int $prochainNumLotVmp The prochain num lot vmp.
     */
    public function setProchainNumLotVmp($prochainNumLotVmp) {
        $this->prochainNumLotVmp = $prochainNumLotVmp;
        return $this;
    }
}
