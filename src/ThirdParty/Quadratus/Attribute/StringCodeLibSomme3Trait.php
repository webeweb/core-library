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
 * Code lib somme3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibSomme3Trait {

    /**
     * Code lib somme3.
     *
     * @var string
     */
    private $codeLibSomme3;

    /**
     * Get the code lib somme3.
     *
     * @return string Returns the code lib somme3.
     */
    public function getCodeLibSomme3() {
        return $this->codeLibSomme3;
    }

    /**
     * Set the code lib somme3.
     *
     * @param string $codeLibSomme3 The code lib somme3.
     */
    public function setCodeLibSomme3($codeLibSomme3) {
        $this->codeLibSomme3 = $codeLibSomme3;
        return $this;
    }
}
