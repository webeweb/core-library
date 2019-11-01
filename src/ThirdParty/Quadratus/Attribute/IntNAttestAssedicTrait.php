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
 * N attest assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestAssedicTrait {

    /**
     * N attest assedic.
     *
     * @var int
     */
    private $nAttestAssedic;

    /**
     * Get the n attest assedic.
     *
     * @return int Returns the n attest assedic.
     */
    public function getNAttestAssedic() {
        return $this->nAttestAssedic;
    }

    /**
     * Set the n attest assedic.
     *
     * @param int $nAttestAssedic The n attest assedic.
     */
    public function setNAttestAssedic($nAttestAssedic) {
        $this->nAttestAssedic = $nAttestAssedic;
        return $this;
    }
}
