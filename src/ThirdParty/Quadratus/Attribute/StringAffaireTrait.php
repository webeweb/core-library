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
 * Affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAffaireTrait {

    /**
     * Affaire.
     *
     * @var string
     */
    private $affaire;

    /**
     * Get the affaire.
     *
     * @return string Returns the affaire.
     */
    public function getAffaire() {
        return $this->affaire;
    }

    /**
     * Set the affaire.
     *
     * @param string $affaire The affaire.
     */
    public function setAffaire($affaire) {
        $this->affaire = $affaire;
        return $this;
    }
}
