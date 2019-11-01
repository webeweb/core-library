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
 * Type population trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePopulationTrait {

    /**
     * Type population.
     *
     * @var string
     */
    private $typePopulation;

    /**
     * Get the type population.
     *
     * @return string Returns the type population.
     */
    public function getTypePopulation() {
        return $this->typePopulation;
    }

    /**
     * Set the type population.
     *
     * @param string $typePopulation The type population.
     */
    public function setTypePopulation($typePopulation) {
        $this->typePopulation = $typePopulation;
        return $this;
    }
}
