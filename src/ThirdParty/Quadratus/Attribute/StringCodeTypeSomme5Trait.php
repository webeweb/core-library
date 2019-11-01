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
 * Code type somme5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeSomme5Trait {

    /**
     * Code type somme5.
     *
     * @var string
     */
    private $codeTypeSomme5;

    /**
     * Get the code type somme5.
     *
     * @return string Returns the code type somme5.
     */
    public function getCodeTypeSomme5() {
        return $this->codeTypeSomme5;
    }

    /**
     * Set the code type somme5.
     *
     * @param string $codeTypeSomme5 The code type somme5.
     */
    public function setCodeTypeSomme5($codeTypeSomme5) {
        $this->codeTypeSomme5 = $codeTypeSomme5;
        return $this;
    }
}
