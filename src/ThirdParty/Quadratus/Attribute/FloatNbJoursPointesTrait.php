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
 * Nb jours pointes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJoursPointesTrait {

    /**
     * Nb jours pointes.
     *
     * @var float
     */
    private $nbJoursPointes;

    /**
     * Get the nb jours pointes.
     *
     * @return float Returns the nb jours pointes.
     */
    public function getNbJoursPointes() {
        return $this->nbJoursPointes;
    }

    /**
     * Set the nb jours pointes.
     *
     * @param float $nbJoursPointes The nb jours pointes.
     */
    public function setNbJoursPointes($nbJoursPointes) {
        $this->nbJoursPointes = $nbJoursPointes;
        return $this;
    }
}
