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
 * Modif affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifAffaireTrait {

    /**
     * Modif affaire.
     *
     * @var string
     */
    private $modifAffaire;

    /**
     * Get the modif affaire.
     *
     * @return string Returns the modif affaire.
     */
    public function getModifAffaire() {
        return $this->modifAffaire;
    }

    /**
     * Set the modif affaire.
     *
     * @param string $modifAffaire The modif affaire.
     */
    public function setModifAffaire($modifAffaire) {
        $this->modifAffaire = $modifAffaire;
        return $this;
    }
}
