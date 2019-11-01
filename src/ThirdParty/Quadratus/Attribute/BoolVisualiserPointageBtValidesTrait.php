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
 * Visualiser pointage bt valides trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisualiserPointageBtValidesTrait {

    /**
     * Visualiser pointage bt valides.
     *
     * @var bool
     */
    private $visualiserPointageBtValides;

    /**
     * Get the visualiser pointage bt valides.
     *
     * @return bool Returns the visualiser pointage bt valides.
     */
    public function getVisualiserPointageBtValides() {
        return $this->visualiserPointageBtValides;
    }

    /**
     * Set the visualiser pointage bt valides.
     *
     * @param bool $visualiserPointageBtValides The visualiser pointage bt valides.
     */
    public function setVisualiserPointageBtValides($visualiserPointageBtValides) {
        $this->visualiserPointageBtValides = $visualiserPointageBtValides;
        return $this;
    }
}
