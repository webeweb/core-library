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
 * Code type somme2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeSomme2Trait {

    /**
     * Code type somme2.
     *
     * @var string
     */
    private $codeTypeSomme2;

    /**
     * Get the code type somme2.
     *
     * @return string Returns the code type somme2.
     */
    public function getCodeTypeSomme2() {
        return $this->codeTypeSomme2;
    }

    /**
     * Set the code type somme2.
     *
     * @param string $codeTypeSomme2 The code type somme2.
     */
    public function setCodeTypeSomme2($codeTypeSomme2) {
        $this->codeTypeSomme2 = $codeTypeSomme2;
        return $this;
    }
}
