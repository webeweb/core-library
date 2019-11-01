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
 * N attest aemx trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestAemxTrait {

    /**
     * N attest aemx.
     *
     * @var int
     */
    private $nAttestAemx;

    /**
     * Get the n attest aemx.
     *
     * @return int Returns the n attest aemx.
     */
    public function getNAttestAemx() {
        return $this->nAttestAemx;
    }

    /**
     * Set the n attest aemx.
     *
     * @param int $nAttestAemx The n attest aemx.
     */
    public function setNAttestAemx($nAttestAemx) {
        $this->nAttestAemx = $nAttestAemx;
        return $this;
    }
}
