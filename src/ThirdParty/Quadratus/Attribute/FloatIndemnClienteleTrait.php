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
 * Indemn clientele trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnClienteleTrait {

    /**
     * Indemn clientele.
     *
     * @var float
     */
    private $indemnClientele;

    /**
     * Get the indemn clientele.
     *
     * @return float Returns the indemn clientele.
     */
    public function getIndemnClientele() {
        return $this->indemnClientele;
    }

    /**
     * Set the indemn clientele.
     *
     * @param float $indemnClientele The indemn clientele.
     */
    public function setIndemnClientele($indemnClientele) {
        $this->indemnClientele = $indemnClientele;
        return $this;
    }
}
