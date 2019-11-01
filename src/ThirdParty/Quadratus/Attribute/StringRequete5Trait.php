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
 * Requete5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete5Trait {

    /**
     * Requete5.
     *
     * @var string
     */
    private $requete5;

    /**
     * Get the requete5.
     *
     * @return string Returns the requete5.
     */
    public function getRequete5() {
        return $this->requete5;
    }

    /**
     * Set the requete5.
     *
     * @param string $requete5 The requete5.
     */
    public function setRequete5($requete5) {
        $this->requete5 = $requete5;
        return $this;
    }
}
