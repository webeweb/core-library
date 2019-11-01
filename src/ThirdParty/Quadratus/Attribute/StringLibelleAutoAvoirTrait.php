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
 * Libelle auto avoir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleAutoAvoirTrait {

    /**
     * Libelle auto avoir.
     *
     * @var string
     */
    private $libelleAutoAvoir;

    /**
     * Get the libelle auto avoir.
     *
     * @return string Returns the libelle auto avoir.
     */
    public function getLibelleAutoAvoir() {
        return $this->libelleAutoAvoir;
    }

    /**
     * Set the libelle auto avoir.
     *
     * @param string $libelleAutoAvoir The libelle auto avoir.
     */
    public function setLibelleAutoAvoir($libelleAutoAvoir) {
        $this->libelleAutoAvoir = $libelleAutoAvoir;
        return $this;
    }
}
