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
 * Requete9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete9Trait {

    /**
     * Requete9.
     *
     * @var string
     */
    private $requete9;

    /**
     * Get the requete9.
     *
     * @return string Returns the requete9.
     */
    public function getRequete9() {
        return $this->requete9;
    }

    /**
     * Set the requete9.
     *
     * @param string $requete9 The requete9.
     */
    public function setRequete9($requete9) {
        $this->requete9 = $requete9;
        return $this;
    }
}
