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
 * Requete2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete2Trait {

    /**
     * Requete2.
     *
     * @var string
     */
    private $requete2;

    /**
     * Get the requete2.
     *
     * @return string Returns the requete2.
     */
    public function getRequete2() {
        return $this->requete2;
    }

    /**
     * Set the requete2.
     *
     * @param string $requete2 The requete2.
     */
    public function setRequete2($requete2) {
        $this->requete2 = $requete2;
        return $this;
    }
}
