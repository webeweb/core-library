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
 * Op contrat signe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpContratSigneTrait {

    /**
     * Op contrat signe.
     *
     * @var bool
     */
    private $opContratSigne;

    /**
     * Get the op contrat signe.
     *
     * @return bool Returns the op contrat signe.
     */
    public function getOpContratSigne() {
        return $this->opContratSigne;
    }

    /**
     * Set the op contrat signe.
     *
     * @param bool $opContratSigne The op contrat signe.
     */
    public function setOpContratSigne($opContratSigne) {
        $this->opContratSigne = $opContratSigne;
        return $this;
    }
}
