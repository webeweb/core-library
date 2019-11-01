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
 * Code lib somme5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibSomme5Trait {

    /**
     * Code lib somme5.
     *
     * @var string
     */
    private $codeLibSomme5;

    /**
     * Get the code lib somme5.
     *
     * @return string Returns the code lib somme5.
     */
    public function getCodeLibSomme5() {
        return $this->codeLibSomme5;
    }

    /**
     * Set the code lib somme5.
     *
     * @param string $codeLibSomme5 The code lib somme5.
     */
    public function setCodeLibSomme5($codeLibSomme5) {
        $this->codeLibSomme5 = $codeLibSomme5;
        return $this;
    }
}
