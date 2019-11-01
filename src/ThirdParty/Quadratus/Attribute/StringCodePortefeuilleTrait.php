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
 * Code portefeuille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePortefeuilleTrait {

    /**
     * Code portefeuille.
     *
     * @var string
     */
    private $codePortefeuille;

    /**
     * Get the code portefeuille.
     *
     * @return string Returns the code portefeuille.
     */
    public function getCodePortefeuille() {
        return $this->codePortefeuille;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string $codePortefeuille The code portefeuille.
     */
    public function setCodePortefeuille($codePortefeuille) {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }
}
