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
 * Brut al sans h sup majo he trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutAlSansHSupMajoHeTrait {

    /**
     * Brut al sans h sup majo he.
     *
     * @var float
     */
    private $brutAlSansHSupMajoHe;

    /**
     * Get the brut al sans h sup majo he.
     *
     * @return float Returns the brut al sans h sup majo he.
     */
    public function getBrutAlSansHSupMajoHe() {
        return $this->brutAlSansHSupMajoHe;
    }

    /**
     * Set the brut al sans h sup majo he.
     *
     * @param float $brutAlSansHSupMajoHe The brut al sans h sup majo he.
     */
    public function setBrutAlSansHSupMajoHe($brutAlSansHSupMajoHe) {
        $this->brutAlSansHSupMajoHe = $brutAlSansHSupMajoHe;
        return $this;
    }
}
