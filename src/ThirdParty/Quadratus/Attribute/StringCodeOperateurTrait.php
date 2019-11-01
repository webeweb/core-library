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
 * Code operateur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOperateurTrait {

    /**
     * Code operateur.
     *
     * @var string
     */
    private $codeOperateur;

    /**
     * Get the code operateur.
     *
     * @return string Returns the code operateur.
     */
    public function getCodeOperateur() {
        return $this->codeOperateur;
    }

    /**
     * Set the code operateur.
     *
     * @param string $codeOperateur The code operateur.
     */
    public function setCodeOperateur($codeOperateur) {
        $this->codeOperateur = $codeOperateur;
        return $this;
    }
}
