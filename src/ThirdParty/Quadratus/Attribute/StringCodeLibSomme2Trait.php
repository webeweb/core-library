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
 * Code lib somme2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibSomme2Trait {

    /**
     * Code lib somme2.
     *
     * @var string
     */
    private $codeLibSomme2;

    /**
     * Get the code lib somme2.
     *
     * @return string Returns the code lib somme2.
     */
    public function getCodeLibSomme2() {
        return $this->codeLibSomme2;
    }

    /**
     * Set the code lib somme2.
     *
     * @param string $codeLibSomme2 The code lib somme2.
     */
    public function setCodeLibSomme2($codeLibSomme2) {
        $this->codeLibSomme2 = $codeLibSomme2;
        return $this;
    }
}
