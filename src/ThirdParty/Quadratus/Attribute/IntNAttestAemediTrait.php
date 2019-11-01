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
 * N attest aemedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestAemediTrait {

    /**
     * N attest aemedi.
     *
     * @var int
     */
    private $nAttestAemedi;

    /**
     * Get the n attest aemedi.
     *
     * @return int Returns the n attest aemedi.
     */
    public function getNAttestAemedi() {
        return $this->nAttestAemedi;
    }

    /**
     * Set the n attest aemedi.
     *
     * @param int $nAttestAemedi The n attest aemedi.
     */
    public function setNAttestAemedi($nAttestAemedi) {
        $this->nAttestAemedi = $nAttestAemedi;
        return $this;
    }
}
