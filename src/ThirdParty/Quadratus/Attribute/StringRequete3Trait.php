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
 * Requete3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete3Trait {

    /**
     * Requete3.
     *
     * @var string
     */
    private $requete3;

    /**
     * Get the requete3.
     *
     * @return string Returns the requete3.
     */
    public function getRequete3() {
        return $this->requete3;
    }

    /**
     * Set the requete3.
     *
     * @param string $requete3 The requete3.
     */
    public function setRequete3($requete3) {
        $this->requete3 = $requete3;
        return $this;
    }
}
