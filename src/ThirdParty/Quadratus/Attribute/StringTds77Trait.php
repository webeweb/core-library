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
 * Tds77 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds77Trait {

    /**
     * Tds77.
     *
     * @var string
     */
    private $tds77;

    /**
     * Get the tds77.
     *
     * @return string Returns the tds77.
     */
    public function getTds77() {
        return $this->tds77;
    }

    /**
     * Set the tds77.
     *
     * @param string $tds77 The tds77.
     */
    public function setTds77($tds77) {
        $this->tds77 = $tds77;
        return $this;
    }
}
