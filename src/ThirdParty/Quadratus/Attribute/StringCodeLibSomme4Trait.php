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
 * Code lib somme4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibSomme4Trait {

    /**
     * Code lib somme4.
     *
     * @var string
     */
    private $codeLibSomme4;

    /**
     * Get the code lib somme4.
     *
     * @return string Returns the code lib somme4.
     */
    public function getCodeLibSomme4() {
        return $this->codeLibSomme4;
    }

    /**
     * Set the code lib somme4.
     *
     * @param string $codeLibSomme4 The code lib somme4.
     */
    public function setCodeLibSomme4($codeLibSomme4) {
        $this->codeLibSomme4 = $codeLibSomme4;
        return $this;
    }
}
