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
 * Type donnees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDonneesTrait {

    /**
     * Type donnees.
     *
     * @var string
     */
    private $typeDonnees;

    /**
     * Get the type donnees.
     *
     * @return string Returns the type donnees.
     */
    public function getTypeDonnees() {
        return $this->typeDonnees;
    }

    /**
     * Set the type donnees.
     *
     * @param string $typeDonnees The type donnees.
     */
    public function setTypeDonnees($typeDonnees) {
        $this->typeDonnees = $typeDonnees;
        return $this;
    }
}
