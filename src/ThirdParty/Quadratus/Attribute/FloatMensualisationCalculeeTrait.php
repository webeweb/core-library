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
 * Mensualisation calculee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMensualisationCalculeeTrait {

    /**
     * Mensualisation calculee.
     *
     * @var float
     */
    private $mensualisationCalculee;

    /**
     * Get the mensualisation calculee.
     *
     * @return float Returns the mensualisation calculee.
     */
    public function getMensualisationCalculee() {
        return $this->mensualisationCalculee;
    }

    /**
     * Set the mensualisation calculee.
     *
     * @param float $mensualisationCalculee The mensualisation calculee.
     */
    public function setMensualisationCalculee($mensualisationCalculee) {
        $this->mensualisationCalculee = $mensualisationCalculee;
        return $this;
    }
}
