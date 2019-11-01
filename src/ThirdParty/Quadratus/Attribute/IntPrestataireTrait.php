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
 * Prestataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrestataireTrait {

    /**
     * Prestataire.
     *
     * @var int
     */
    private $prestataire;

    /**
     * Get the prestataire.
     *
     * @return int Returns the prestataire.
     */
    public function getPrestataire() {
        return $this->prestataire;
    }

    /**
     * Set the prestataire.
     *
     * @param int $prestataire The prestataire.
     */
    public function setPrestataire($prestataire) {
        $this->prestataire = $prestataire;
        return $this;
    }
}
