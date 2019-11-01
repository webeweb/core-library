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
 * Rac data cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRacDataCptaTrait {

    /**
     * Rac data cpta.
     *
     * @var string
     */
    private $racDataCpta;

    /**
     * Get the rac data cpta.
     *
     * @return string Returns the rac data cpta.
     */
    public function getRacDataCpta() {
        return $this->racDataCpta;
    }

    /**
     * Set the rac data cpta.
     *
     * @param string $racDataCpta The rac data cpta.
     */
    public function setRacDataCpta($racDataCpta) {
        $this->racDataCpta = $racDataCpta;
        return $this;
    }
}
