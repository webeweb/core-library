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
 * Code abs pointage defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAbsPointageDefautTrait {

    /**
     * Code abs pointage defaut.
     *
     * @var string
     */
    private $codeAbsPointageDefaut;

    /**
     * Get the code abs pointage defaut.
     *
     * @return string Returns the code abs pointage defaut.
     */
    public function getCodeAbsPointageDefaut() {
        return $this->codeAbsPointageDefaut;
    }

    /**
     * Set the code abs pointage defaut.
     *
     * @param string $codeAbsPointageDefaut The code abs pointage defaut.
     */
    public function setCodeAbsPointageDefaut($codeAbsPointageDefaut) {
        $this->codeAbsPointageDefaut = $codeAbsPointageDefaut;
        return $this;
    }
}
