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
 * Mensualisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMensualisationTrait {

    /**
     * Mensualisation.
     *
     * @var float
     */
    private $mensualisation;

    /**
     * Get the mensualisation.
     *
     * @return float Returns the mensualisation.
     */
    public function getMensualisation() {
        return $this->mensualisation;
    }

    /**
     * Set the mensualisation.
     *
     * @param float $mensualisation The mensualisation.
     */
    public function setMensualisation($mensualisation) {
        $this->mensualisation = $mensualisation;
        return $this;
    }
}
