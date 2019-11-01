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
 * Nb h repo comp prises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRepoCompPrisesTrait {

    /**
     * Nb h repo comp prises.
     *
     * @var float
     */
    private $nbHRepoCompPrises;

    /**
     * Get the nb h repo comp prises.
     *
     * @return float Returns the nb h repo comp prises.
     */
    public function getNbHRepoCompPrises() {
        return $this->nbHRepoCompPrises;
    }

    /**
     * Set the nb h repo comp prises.
     *
     * @param float $nbHRepoCompPrises The nb h repo comp prises.
     */
    public function setNbHRepoCompPrises($nbHRepoCompPrises) {
        $this->nbHRepoCompPrises = $nbHRepoCompPrises;
        return $this;
    }
}
