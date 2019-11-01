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
 * Collab valideur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollabValideurTrait {

    /**
     * Collab valideur.
     *
     * @var string
     */
    private $collabValideur;

    /**
     * Get the collab valideur.
     *
     * @return string Returns the collab valideur.
     */
    public function getCollabValideur() {
        return $this->collabValideur;
    }

    /**
     * Set the collab valideur.
     *
     * @param string $collabValideur The collab valideur.
     */
    public function setCollabValideur($collabValideur) {
        $this->collabValideur = $collabValideur;
        return $this;
    }
}
