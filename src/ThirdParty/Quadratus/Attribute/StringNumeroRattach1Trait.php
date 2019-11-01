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
 * Numero rattach1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroRattach1Trait {

    /**
     * Numero rattach1.
     *
     * @var string
     */
    private $numeroRattach1;

    /**
     * Get the numero rattach1.
     *
     * @return string Returns the numero rattach1.
     */
    public function getNumeroRattach1() {
        return $this->numeroRattach1;
    }

    /**
     * Set the numero rattach1.
     *
     * @param string $numeroRattach1 The numero rattach1.
     */
    public function setNumeroRattach1($numeroRattach1) {
        $this->numeroRattach1 = $numeroRattach1;
        return $this;
    }
}
