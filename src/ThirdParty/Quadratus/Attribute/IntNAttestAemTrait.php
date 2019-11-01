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
 * N attest aem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestAemTrait {

    /**
     * N attest aem.
     *
     * @var int
     */
    private $nAttestAem;

    /**
     * Get the n attest aem.
     *
     * @return int Returns the n attest aem.
     */
    public function getNAttestAem() {
        return $this->nAttestAem;
    }

    /**
     * Set the n attest aem.
     *
     * @param int $nAttestAem The n attest aem.
     */
    public function setNAttestAem($nAttestAem) {
        $this->nAttestAem = $nAttestAem;
        return $this;
    }
}
