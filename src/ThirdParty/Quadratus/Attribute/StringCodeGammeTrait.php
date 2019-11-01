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
 * Code gamme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeGammeTrait {

    /**
     * Code gamme.
     *
     * @var string
     */
    private $codeGamme;

    /**
     * Get the code gamme.
     *
     * @return string Returns the code gamme.
     */
    public function getCodeGamme() {
        return $this->codeGamme;
    }

    /**
     * Set the code gamme.
     *
     * @param string $codeGamme The code gamme.
     */
    public function setCodeGamme($codeGamme) {
        $this->codeGamme = $codeGamme;
        return $this;
    }
}
