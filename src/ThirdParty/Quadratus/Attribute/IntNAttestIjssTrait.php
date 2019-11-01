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
 * N attest ijss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestIjssTrait {

    /**
     * N attest ijss.
     *
     * @var int
     */
    private $nAttestIjss;

    /**
     * Get the n attest ijss.
     *
     * @return int Returns the n attest ijss.
     */
    public function getNAttestIjss() {
        return $this->nAttestIjss;
    }

    /**
     * Set the n attest ijss.
     *
     * @param int $nAttestIjss The n attest ijss.
     */
    public function setNAttestIjss($nAttestIjss) {
        $this->nAttestIjss = $nAttestIjss;
        return $this;
    }
}
