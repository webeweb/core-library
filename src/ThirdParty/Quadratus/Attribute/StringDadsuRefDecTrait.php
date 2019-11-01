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
 * Dadsu ref dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsuRefDecTrait {

    /**
     * Dadsu ref dec.
     *
     * @var string
     */
    private $dadsuRefDec;

    /**
     * Get the dadsu ref dec.
     *
     * @return string Returns the dadsu ref dec.
     */
    public function getDadsuRefDec() {
        return $this->dadsuRefDec;
    }

    /**
     * Set the dadsu ref dec.
     *
     * @param string $dadsuRefDec The dadsu ref dec.
     */
    public function setDadsuRefDec($dadsuRefDec) {
        $this->dadsuRefDec = $dadsuRefDec;
        return $this;
    }
}
