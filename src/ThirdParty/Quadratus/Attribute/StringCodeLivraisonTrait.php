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
 * Code livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLivraisonTrait {

    /**
     * Code livraison.
     *
     * @var string
     */
    private $codeLivraison;

    /**
     * Get the code livraison.
     *
     * @return string Returns the code livraison.
     */
    public function getCodeLivraison() {
        return $this->codeLivraison;
    }

    /**
     * Set the code livraison.
     *
     * @param string $codeLivraison The code livraison.
     */
    public function setCodeLivraison($codeLivraison) {
        $this->codeLivraison = $codeLivraison;
        return $this;
    }
}
