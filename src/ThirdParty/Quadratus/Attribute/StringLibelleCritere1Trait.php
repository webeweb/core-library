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
 * Libelle critere1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleCritere1Trait {

    /**
     * Libelle critere1.
     *
     * @var string
     */
    private $libelleCritere1;

    /**
     * Get the libelle critere1.
     *
     * @return string Returns the libelle critere1.
     */
    public function getLibelleCritere1() {
        return $this->libelleCritere1;
    }

    /**
     * Set the libelle critere1.
     *
     * @param string $libelleCritere1 The libelle critere1.
     */
    public function setLibelleCritere1($libelleCritere1) {
        $this->libelleCritere1 = $libelleCritere1;
        return $this;
    }
}
