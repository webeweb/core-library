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
 * Nom mere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomMereTrait {

    /**
     * Nom mere.
     *
     * @var string
     */
    private $nomMere;

    /**
     * Get the nom mere.
     *
     * @return string Returns the nom mere.
     */
    public function getNomMere() {
        return $this->nomMere;
    }

    /**
     * Set the nom mere.
     *
     * @param string $nomMere The nom mere.
     */
    public function setNomMere($nomMere) {
        $this->nomMere = $nomMere;
        return $this;
    }
}
