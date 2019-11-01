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
 * Cout heure theo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoutHeureTheoTrait {

    /**
     * Cout heure theo.
     *
     * @var float
     */
    private $coutHeureTheo;

    /**
     * Get the cout heure theo.
     *
     * @return float Returns the cout heure theo.
     */
    public function getCoutHeureTheo() {
        return $this->coutHeureTheo;
    }

    /**
     * Set the cout heure theo.
     *
     * @param float $coutHeureTheo The cout heure theo.
     */
    public function setCoutHeureTheo($coutHeureTheo) {
        $this->coutHeureTheo = $coutHeureTheo;
        return $this;
    }
}
