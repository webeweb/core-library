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
 * Code type somme4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeSomme4Trait {

    /**
     * Code type somme4.
     *
     * @var string
     */
    private $codeTypeSomme4;

    /**
     * Get the code type somme4.
     *
     * @return string Returns the code type somme4.
     */
    public function getCodeTypeSomme4() {
        return $this->codeTypeSomme4;
    }

    /**
     * Set the code type somme4.
     *
     * @param string $codeTypeSomme4 The code type somme4.
     */
    public function setCodeTypeSomme4($codeTypeSomme4) {
        $this->codeTypeSomme4 = $codeTypeSomme4;
        return $this;
    }
}
