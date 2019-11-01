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
 * Code population trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePopulationTrait {

    /**
     * Code population.
     *
     * @var string
     */
    private $codePopulation;

    /**
     * Get the code population.
     *
     * @return string Returns the code population.
     */
    public function getCodePopulation() {
        return $this->codePopulation;
    }

    /**
     * Set the code population.
     *
     * @param string $codePopulation The code population.
     */
    public function setCodePopulation($codePopulation) {
        $this->codePopulation = $codePopulation;
        return $this;
    }
}
