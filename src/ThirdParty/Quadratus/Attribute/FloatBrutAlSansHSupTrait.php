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
 * Brut al sans h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutAlSansHSupTrait {

    /**
     * Brut al sans h sup.
     *
     * @var float
     */
    private $brutAlSansHSup;

    /**
     * Get the brut al sans h sup.
     *
     * @return float Returns the brut al sans h sup.
     */
    public function getBrutAlSansHSup() {
        return $this->brutAlSansHSup;
    }

    /**
     * Set the brut al sans h sup.
     *
     * @param float $brutAlSansHSup The brut al sans h sup.
     */
    public function setBrutAlSansHSup($brutAlSansHSup) {
        $this->brutAlSansHSup = $brutAlSansHSup;
        return $this;
    }
}
