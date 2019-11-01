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
 * N attest ijss at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestIjssAtTrait {

    /**
     * N attest ijss at.
     *
     * @var int
     */
    private $nAttestIjssAt;

    /**
     * Get the n attest ijss at.
     *
     * @return int Returns the n attest ijss at.
     */
    public function getNAttestIjssAt() {
        return $this->nAttestIjssAt;
    }

    /**
     * Set the n attest ijss at.
     *
     * @param int $nAttestIjssAt The n attest ijss at.
     */
    public function setNAttestIjssAt($nAttestIjssAt) {
        $this->nAttestIjssAt = $nAttestIjssAt;
        return $this;
    }
}
