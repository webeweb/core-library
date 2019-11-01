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
 * Confidentialite affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolConfidentialiteAffaireTrait {

    /**
     * Confidentialite affaire.
     *
     * @var bool
     */
    private $confidentialiteAffaire;

    /**
     * Get the confidentialite affaire.
     *
     * @return bool Returns the confidentialite affaire.
     */
    public function getConfidentialiteAffaire() {
        return $this->confidentialiteAffaire;
    }

    /**
     * Set the confidentialite affaire.
     *
     * @param bool $confidentialiteAffaire The confidentialite affaire.
     */
    public function setConfidentialiteAffaire($confidentialiteAffaire) {
        $this->confidentialiteAffaire = $confidentialiteAffaire;
        return $this;
    }
}
