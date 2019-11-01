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
 * Requete8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete8Trait {

    /**
     * Requete8.
     *
     * @var string
     */
    private $requete8;

    /**
     * Get the requete8.
     *
     * @return string Returns the requete8.
     */
    public function getRequete8() {
        return $this->requete8;
    }

    /**
     * Set the requete8.
     *
     * @param string $requete8 The requete8.
     */
    public function setRequete8($requete8) {
        $this->requete8 = $requete8;
        return $this;
    }
}
