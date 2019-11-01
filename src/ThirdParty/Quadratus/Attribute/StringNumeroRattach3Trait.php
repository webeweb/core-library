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
 * Numero rattach3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroRattach3Trait {

    /**
     * Numero rattach3.
     *
     * @var string
     */
    private $numeroRattach3;

    /**
     * Get the numero rattach3.
     *
     * @return string Returns the numero rattach3.
     */
    public function getNumeroRattach3() {
        return $this->numeroRattach3;
    }

    /**
     * Set the numero rattach3.
     *
     * @param string $numeroRattach3 The numero rattach3.
     */
    public function setNumeroRattach3($numeroRattach3) {
        $this->numeroRattach3 = $numeroRattach3;
        return $this;
    }
}
