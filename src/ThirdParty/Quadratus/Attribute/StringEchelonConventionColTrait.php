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
 * Echelon convention col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEchelonConventionColTrait {

    /**
     * Echelon convention col.
     *
     * @var string
     */
    private $echelonConventionCol;

    /**
     * Get the echelon convention col.
     *
     * @return string Returns the echelon convention col.
     */
    public function getEchelonConventionCol() {
        return $this->echelonConventionCol;
    }

    /**
     * Set the echelon convention col.
     *
     * @param string $echelonConventionCol The echelon convention col.
     */
    public function setEchelonConventionCol($echelonConventionCol) {
        $this->echelonConventionCol = $echelonConventionCol;
        return $this;
    }
}
