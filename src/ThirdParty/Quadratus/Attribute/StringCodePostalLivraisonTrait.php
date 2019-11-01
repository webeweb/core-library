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
 * Code postal livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalLivraisonTrait {

    /**
     * Code postal livraison.
     *
     * @var string
     */
    private $codePostalLivraison;

    /**
     * Get the code postal livraison.
     *
     * @return string Returns the code postal livraison.
     */
    public function getCodePostalLivraison() {
        return $this->codePostalLivraison;
    }

    /**
     * Set the code postal livraison.
     *
     * @param string $codePostalLivraison The code postal livraison.
     */
    public function setCodePostalLivraison($codePostalLivraison) {
        $this->codePostalLivraison = $codePostalLivraison;
        return $this;
    }
}
