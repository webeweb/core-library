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
 * Plafond semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondSemaineTrait {

    /**
     * Plafond semaine.
     *
     * @var float
     */
    private $plafondSemaine;

    /**
     * Get the plafond semaine.
     *
     * @return float Returns the plafond semaine.
     */
    public function getPlafondSemaine() {
        return $this->plafondSemaine;
    }

    /**
     * Set the plafond semaine.
     *
     * @param float $plafondSemaine The plafond semaine.
     */
    public function setPlafondSemaine($plafondSemaine) {
        $this->plafondSemaine = $plafondSemaine;
        return $this;
    }
}
