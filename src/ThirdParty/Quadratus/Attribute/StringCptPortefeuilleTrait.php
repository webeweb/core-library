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
 * Cpt portefeuille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptPortefeuilleTrait {

    /**
     * Cpt portefeuille.
     *
     * @var string
     */
    private $cptPortefeuille;

    /**
     * Get the cpt portefeuille.
     *
     * @return string Returns the cpt portefeuille.
     */
    public function getCptPortefeuille() {
        return $this->cptPortefeuille;
    }

    /**
     * Set the cpt portefeuille.
     *
     * @param string $cptPortefeuille The cpt portefeuille.
     */
    public function setCptPortefeuille($cptPortefeuille) {
        $this->cptPortefeuille = $cptPortefeuille;
        return $this;
    }
}
