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
 * Prof spectacle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProfSpectacleTrait {

    /**
     * Prof spectacle.
     *
     * @var bool
     */
    private $profSpectacle;

    /**
     * Get the prof spectacle.
     *
     * @return bool Returns the prof spectacle.
     */
    public function getProfSpectacle() {
        return $this->profSpectacle;
    }

    /**
     * Set the prof spectacle.
     *
     * @param bool $profSpectacle The prof spectacle.
     */
    public function setProfSpectacle($profSpectacle) {
        $this->profSpectacle = $profSpectacle;
        return $this;
    }
}
