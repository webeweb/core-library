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
 * Nir rattachement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNirRattachementTrait {

    /**
     * Nir rattachement.
     *
     * @var string
     */
    private $nirRattachement;

    /**
     * Get the nir rattachement.
     *
     * @return string Returns the nir rattachement.
     */
    public function getNirRattachement() {
        return $this->nirRattachement;
    }

    /**
     * Set the nir rattachement.
     *
     * @param string $nirRattachement The nir rattachement.
     */
    public function setNirRattachement($nirRattachement) {
        $this->nirRattachement = $nirRattachement;
        return $this;
    }
}
