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
 * Reduc fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReducFillonTrait {

    /**
     * Reduc fillon.
     *
     * @var float
     */
    private $reducFillon;

    /**
     * Get the reduc fillon.
     *
     * @return float Returns the reduc fillon.
     */
    public function getReducFillon() {
        return $this->reducFillon;
    }

    /**
     * Set the reduc fillon.
     *
     * @param float $reducFillon The reduc fillon.
     */
    public function setReducFillon($reducFillon) {
        $this->reducFillon = $reducFillon;
        return $this;
    }
}
