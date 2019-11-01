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
 * Bureau distributeur livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBureauDistributeurLivraisonTrait {

    /**
     * Bureau distributeur livraison.
     *
     * @var string
     */
    private $bureauDistributeurLivraison;

    /**
     * Get the bureau distributeur livraison.
     *
     * @return string Returns the bureau distributeur livraison.
     */
    public function getBureauDistributeurLivraison() {
        return $this->bureauDistributeurLivraison;
    }

    /**
     * Set the bureau distributeur livraison.
     *
     * @param string $bureauDistributeurLivraison The bureau distributeur livraison.
     */
    public function setBureauDistributeurLivraison($bureauDistributeurLivraison) {
        $this->bureauDistributeurLivraison = $bureauDistributeurLivraison;
        return $this;
    }
}
