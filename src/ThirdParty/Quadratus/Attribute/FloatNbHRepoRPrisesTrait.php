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
 * Nb h repo r prises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRepoRPrisesTrait {

    /**
     * Nb h repo r prises.
     *
     * @var float
     */
    private $nbHRepoRPrises;

    /**
     * Get the nb h repo r prises.
     *
     * @return float Returns the nb h repo r prises.
     */
    public function getNbHRepoRPrises() {
        return $this->nbHRepoRPrises;
    }

    /**
     * Set the nb h repo r prises.
     *
     * @param float $nbHRepoRPrises The nb h repo r prises.
     */
    public function setNbHRepoRPrises($nbHRepoRPrises) {
        $this->nbHRepoRPrises = $nbHRepoRPrises;
        return $this;
    }
}
