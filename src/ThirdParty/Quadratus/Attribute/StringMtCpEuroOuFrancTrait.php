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
 * Mt cp euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMtCpEuroOuFrancTrait {

    /**
     * Mt cp euro ou franc.
     *
     * @var string
     */
    private $mtCpEuroOuFranc;

    /**
     * Get the mt cp euro ou franc.
     *
     * @return string Returns the mt cp euro ou franc.
     */
    public function getMtCpEuroOuFranc() {
        return $this->mtCpEuroOuFranc;
    }

    /**
     * Set the mt cp euro ou franc.
     *
     * @param string $mtCpEuroOuFranc The mt cp euro ou franc.
     */
    public function setMtCpEuroOuFranc($mtCpEuroOuFranc) {
        $this->mtCpEuroOuFranc = $mtCpEuroOuFranc;
        return $this;
    }
}
