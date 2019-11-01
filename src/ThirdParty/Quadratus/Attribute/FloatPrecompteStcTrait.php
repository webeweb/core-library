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
 * Precompte stc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrecompteStcTrait {

    /**
     * Precompte stc.
     *
     * @var float
     */
    private $precompteStc;

    /**
     * Get the precompte stc.
     *
     * @return float Returns the precompte stc.
     */
    public function getPrecompteStc() {
        return $this->precompteStc;
    }

    /**
     * Set the precompte stc.
     *
     * @param float $precompteStc The precompte stc.
     */
    public function setPrecompteStc($precompteStc) {
        $this->precompteStc = $precompteStc;
        return $this;
    }
}
