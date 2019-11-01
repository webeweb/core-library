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
 * Prenom conjoint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrenomConjointTrait {

    /**
     * Prenom conjoint.
     *
     * @var string
     */
    private $prenomConjoint;

    /**
     * Get the prenom conjoint.
     *
     * @return string Returns the prenom conjoint.
     */
    public function getPrenomConjoint() {
        return $this->prenomConjoint;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string $prenomConjoint The prenom conjoint.
     */
    public function setPrenomConjoint($prenomConjoint) {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }
}
