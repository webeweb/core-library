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
 * Intervient indem preca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIntervientIndemPrecaTrait {

    /**
     * Intervient indem preca.
     *
     * @var bool
     */
    private $intervientIndemPreca;

    /**
     * Get the intervient indem preca.
     *
     * @return bool Returns the intervient indem preca.
     */
    public function getIntervientIndemPreca() {
        return $this->intervientIndemPreca;
    }

    /**
     * Set the intervient indem preca.
     *
     * @param bool $intervientIndemPreca The intervient indem preca.
     */
    public function setIntervientIndemPreca($intervientIndemPreca) {
        $this->intervientIndemPreca = $intervientIndemPreca;
        return $this;
    }
}
