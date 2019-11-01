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
 * Code feuille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFeuilleTrait {

    /**
     * Code feuille.
     *
     * @var string
     */
    private $codeFeuille;

    /**
     * Get the code feuille.
     *
     * @return string Returns the code feuille.
     */
    public function getCodeFeuille() {
        return $this->codeFeuille;
    }

    /**
     * Set the code feuille.
     *
     * @param string $codeFeuille The code feuille.
     */
    public function setCodeFeuille($codeFeuille) {
        $this->codeFeuille = $codeFeuille;
        return $this;
    }
}
