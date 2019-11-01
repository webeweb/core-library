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
 * Num voie livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumVoieLivraisonTrait {

    /**
     * Num voie livraison.
     *
     * @var string
     */
    private $numVoieLivraison;

    /**
     * Get the num voie livraison.
     *
     * @return string Returns the num voie livraison.
     */
    public function getNumVoieLivraison() {
        return $this->numVoieLivraison;
    }

    /**
     * Set the num voie livraison.
     *
     * @param string $numVoieLivraison The num voie livraison.
     */
    public function setNumVoieLivraison($numVoieLivraison) {
        $this->numVoieLivraison = $numVoieLivraison;
        return $this;
    }
}
