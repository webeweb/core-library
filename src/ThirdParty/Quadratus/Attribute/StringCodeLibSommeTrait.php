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
 * Code lib somme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibSommeTrait {

    /**
     * Code lib somme.
     *
     * @var string
     */
    private $codeLibSomme;

    /**
     * Get the code lib somme.
     *
     * @return string Returns the code lib somme.
     */
    public function getCodeLibSomme() {
        return $this->codeLibSomme;
    }

    /**
     * Set the code lib somme.
     *
     * @param string $codeLibSomme The code lib somme.
     */
    public function setCodeLibSomme($codeLibSomme) {
        $this->codeLibSomme = $codeLibSomme;
        return $this;
    }
}
