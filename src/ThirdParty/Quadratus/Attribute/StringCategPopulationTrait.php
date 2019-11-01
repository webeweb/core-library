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
 * Categ population trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategPopulationTrait {

    /**
     * Categ population.
     *
     * @var string
     */
    private $categPopulation;

    /**
     * Get the categ population.
     *
     * @return string Returns the categ population.
     */
    public function getCategPopulation() {
        return $this->categPopulation;
    }

    /**
     * Set the categ population.
     *
     * @param string $categPopulation The categ population.
     */
    public function setCategPopulation($categPopulation) {
        $this->categPopulation = $categPopulation;
        return $this;
    }
}
