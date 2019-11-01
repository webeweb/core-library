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
 * Nom conjoint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomConjointTrait {

    /**
     * Nom conjoint.
     *
     * @var string
     */
    private $nomConjoint;

    /**
     * Get the nom conjoint.
     *
     * @return string Returns the nom conjoint.
     */
    public function getNomConjoint() {
        return $this->nomConjoint;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string $nomConjoint The nom conjoint.
     */
    public function setNomConjoint($nomConjoint) {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }
}
