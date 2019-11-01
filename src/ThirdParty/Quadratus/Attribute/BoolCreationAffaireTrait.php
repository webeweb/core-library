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
 * Creation affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationAffaireTrait {

    /**
     * Creation affaire.
     *
     * @var bool
     */
    private $creationAffaire;

    /**
     * Get the creation affaire.
     *
     * @return bool Returns the creation affaire.
     */
    public function getCreationAffaire() {
        return $this->creationAffaire;
    }

    /**
     * Set the creation affaire.
     *
     * @param bool $creationAffaire The creation affaire.
     */
    public function setCreationAffaire($creationAffaire) {
        $this->creationAffaire = $creationAffaire;
        return $this;
    }
}
