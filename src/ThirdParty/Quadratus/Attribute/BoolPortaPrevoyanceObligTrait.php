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
 * Porta prevoyance oblig trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPortaPrevoyanceObligTrait {

    /**
     * Porta prevoyance oblig.
     *
     * @var bool
     */
    private $portaPrevoyanceOblig;

    /**
     * Get the porta prevoyance oblig.
     *
     * @return bool Returns the porta prevoyance oblig.
     */
    public function getPortaPrevoyanceOblig() {
        return $this->portaPrevoyanceOblig;
    }

    /**
     * Set the porta prevoyance oblig.
     *
     * @param bool $portaPrevoyanceOblig The porta prevoyance oblig.
     */
    public function setPortaPrevoyanceOblig($portaPrevoyanceOblig) {
        $this->portaPrevoyanceOblig = $portaPrevoyanceOblig;
        return $this;
    }
}
