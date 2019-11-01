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
 * Num cpt payeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptPayeurTrait {

    /**
     * Num cpt payeur.
     *
     * @var string
     */
    private $numCptPayeur;

    /**
     * Get the num cpt payeur.
     *
     * @return string Returns the num cpt payeur.
     */
    public function getNumCptPayeur() {
        return $this->numCptPayeur;
    }

    /**
     * Set the num cpt payeur.
     *
     * @param string $numCptPayeur The num cpt payeur.
     */
    public function setNumCptPayeur($numCptPayeur) {
        $this->numCptPayeur = $numCptPayeur;
        return $this;
    }
}
