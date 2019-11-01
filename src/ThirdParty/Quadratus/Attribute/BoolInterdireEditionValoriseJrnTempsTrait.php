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
 * Interdire edition valorise jrn temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireEditionValoriseJrnTempsTrait {

    /**
     * Interdire edition valorise jrn temps.
     *
     * @var bool
     */
    private $interdireEditionValoriseJrnTemps;

    /**
     * Get the interdire edition valorise jrn temps.
     *
     * @return bool Returns the interdire edition valorise jrn temps.
     */
    public function getInterdireEditionValoriseJrnTemps() {
        return $this->interdireEditionValoriseJrnTemps;
    }

    /**
     * Set the interdire edition valorise jrn temps.
     *
     * @param bool $interdireEditionValoriseJrnTemps The interdire edition valorise jrn temps.
     */
    public function setInterdireEditionValoriseJrnTemps($interdireEditionValoriseJrnTemps) {
        $this->interdireEditionValoriseJrnTemps = $interdireEditionValoriseJrnTemps;
        return $this;
    }
}
