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
 * Code grille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeGrilleTrait {

    /**
     * Code grille.
     *
     * @var string
     */
    private $codeGrille;

    /**
     * Get the code grille.
     *
     * @return string Returns the code grille.
     */
    public function getCodeGrille() {
        return $this->codeGrille;
    }

    /**
     * Set the code grille.
     *
     * @param string $codeGrille The code grille.
     */
    public function setCodeGrille($codeGrille) {
        $this->codeGrille = $codeGrille;
        return $this;
    }
}
