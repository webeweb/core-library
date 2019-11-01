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
 * Code type somme3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeSomme3Trait {

    /**
     * Code type somme3.
     *
     * @var string
     */
    private $codeTypeSomme3;

    /**
     * Get the code type somme3.
     *
     * @return string Returns the code type somme3.
     */
    public function getCodeTypeSomme3() {
        return $this->codeTypeSomme3;
    }

    /**
     * Set the code type somme3.
     *
     * @param string $codeTypeSomme3 The code type somme3.
     */
    public function setCodeTypeSomme3($codeTypeSomme3) {
        $this->codeTypeSomme3 = $codeTypeSomme3;
        return $this;
    }
}
