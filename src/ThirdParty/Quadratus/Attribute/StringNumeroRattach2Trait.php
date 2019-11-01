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
 * Numero rattach2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroRattach2Trait {

    /**
     * Numero rattach2.
     *
     * @var string
     */
    private $numeroRattach2;

    /**
     * Get the numero rattach2.
     *
     * @return string Returns the numero rattach2.
     */
    public function getNumeroRattach2() {
        return $this->numeroRattach2;
    }

    /**
     * Set the numero rattach2.
     *
     * @param string $numeroRattach2 The numero rattach2.
     */
    public function setNumeroRattach2($numeroRattach2) {
        $this->numeroRattach2 = $numeroRattach2;
        return $this;
    }
}
