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
 * Collab auteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollabAuteurTrait {

    /**
     * Collab auteur.
     *
     * @var string
     */
    private $collabAuteur;

    /**
     * Get the collab auteur.
     *
     * @return string Returns the collab auteur.
     */
    public function getCollabAuteur() {
        return $this->collabAuteur;
    }

    /**
     * Set the collab auteur.
     *
     * @param string $collabAuteur The collab auteur.
     */
    public function setCollabAuteur($collabAuteur) {
        $this->collabAuteur = $collabAuteur;
        return $this;
    }
}
