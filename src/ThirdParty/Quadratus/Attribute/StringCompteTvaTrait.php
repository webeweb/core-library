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
 * Compte tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTvaTrait {

    /**
     * Compte tva.
     *
     * @var string
     */
    private $compteTva;

    /**
     * Get the compte tva.
     *
     * @return string Returns the compte tva.
     */
    public function getCompteTva() {
        return $this->compteTva;
    }

    /**
     * Set the compte tva.
     *
     * @param string $compteTva The compte tva.
     */
    public function setCompteTva($compteTva) {
        $this->compteTva = $compteTva;
        return $this;
    }
}
