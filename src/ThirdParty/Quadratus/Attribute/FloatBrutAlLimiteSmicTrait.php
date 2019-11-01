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
 * Brut al limite smic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutAlLimiteSmicTrait {

    /**
     * Brut al limite smic.
     *
     * @var float
     */
    private $brutAlLimiteSmic;

    /**
     * Get the brut al limite smic.
     *
     * @return float Returns the brut al limite smic.
     */
    public function getBrutAlLimiteSmic() {
        return $this->brutAlLimiteSmic;
    }

    /**
     * Set the brut al limite smic.
     *
     * @param float $brutAlLimiteSmic The brut al limite smic.
     */
    public function setBrutAlLimiteSmic($brutAlLimiteSmic) {
        $this->brutAlLimiteSmic = $brutAlLimiteSmic;
        return $this;
    }
}
