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
 * Num compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCompteTrait {

    /**
     * Num compte.
     *
     * @var string
     */
    private $numCompte;

    /**
     * Get the num compte.
     *
     * @return string Returns the num compte.
     */
    public function getNumCompte() {
        return $this->numCompte;
    }

    /**
     * Set the num compte.
     *
     * @param string $numCompte The num compte.
     */
    public function setNumCompte($numCompte) {
        $this->numCompte = $numCompte;
        return $this;
    }
}
