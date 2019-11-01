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
 * Code fonction trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFonctionTrait {

    /**
     * Code fonction.
     *
     * @var string
     */
    private $codeFonction;

    /**
     * Get the code fonction.
     *
     * @return string Returns the code fonction.
     */
    public function getCodeFonction() {
        return $this->codeFonction;
    }

    /**
     * Set the code fonction.
     *
     * @param string $codeFonction The code fonction.
     */
    public function setCodeFonction($codeFonction) {
        $this->codeFonction = $codeFonction;
        return $this;
    }
}
