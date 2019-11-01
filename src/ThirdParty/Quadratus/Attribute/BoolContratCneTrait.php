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
 * Contrat cne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolContratCneTrait {

    /**
     * Contrat cne.
     *
     * @var bool
     */
    private $contratCne;

    /**
     * Get the contrat cne.
     *
     * @return bool Returns the contrat cne.
     */
    public function getContratCne() {
        return $this->contratCne;
    }

    /**
     * Set the contrat cne.
     *
     * @param bool $contratCne The contrat cne.
     */
    public function setContratCne($contratCne) {
        $this->contratCne = $contratCne;
        return $this;
    }
}
