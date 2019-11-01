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
 * Code depot par defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDepotParDefautTrait {

    /**
     * Code depot par defaut.
     *
     * @var string
     */
    private $codeDepotParDefaut;

    /**
     * Get the code depot par defaut.
     *
     * @return string Returns the code depot par defaut.
     */
    public function getCodeDepotParDefaut() {
        return $this->codeDepotParDefaut;
    }

    /**
     * Set the code depot par defaut.
     *
     * @param string $codeDepotParDefaut The code depot par defaut.
     */
    public function setCodeDepotParDefaut($codeDepotParDefaut) {
        $this->codeDepotParDefaut = $codeDepotParDefaut;
        return $this;
    }
}
