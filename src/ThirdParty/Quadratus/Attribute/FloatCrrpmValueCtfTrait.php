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
 * Crrpm value ctf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrpmValueCtfTrait {

    /**
     * Crrpm value ctf.
     *
     * @var float
     */
    private $crrpmValueCtf;

    /**
     * Get the crrpm value ctf.
     *
     * @return float Returns the crrpm value ctf.
     */
    public function getCrrpmValueCtf() {
        return $this->crrpmValueCtf;
    }

    /**
     * Set the crrpm value ctf.
     *
     * @param float $crrpmValueCtf The crrpm value ctf.
     */
    public function setCrrpmValueCtf($crrpmValueCtf) {
        $this->crrpmValueCtf = $crrpmValueCtf;
        return $this;
    }
}
