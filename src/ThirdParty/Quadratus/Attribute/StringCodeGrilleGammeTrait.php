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
 * Code grille gamme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeGrilleGammeTrait {

    /**
     * Code grille gamme.
     *
     * @var string
     */
    private $codeGrilleGamme;

    /**
     * Get the code grille gamme.
     *
     * @return string Returns the code grille gamme.
     */
    public function getCodeGrilleGamme() {
        return $this->codeGrilleGamme;
    }

    /**
     * Set the code grille gamme.
     *
     * @param string $codeGrilleGamme The code grille gamme.
     */
    public function setCodeGrilleGamme($codeGrilleGamme) {
        $this->codeGrilleGamme = $codeGrilleGamme;
        return $this;
    }
}
