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
 * N attest extras trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNAttestExtrasTrait {

    /**
     * N attest extras.
     *
     * @var int
     */
    private $nAttestExtras;

    /**
     * Get the n attest extras.
     *
     * @return int Returns the n attest extras.
     */
    public function getNAttestExtras() {
        return $this->nAttestExtras;
    }

    /**
     * Set the n attest extras.
     *
     * @param int $nAttestExtras The n attest extras.
     */
    public function setNAttestExtras($nAttestExtras) {
        $this->nAttestExtras = $nAttestExtras;
        return $this;
    }
}
