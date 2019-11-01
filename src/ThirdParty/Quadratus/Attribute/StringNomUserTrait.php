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
 * Nom user trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomUserTrait {

    /**
     * Nom user.
     *
     * @var string
     */
    private $nomUser;

    /**
     * Get the nom user.
     *
     * @return string Returns the nom user.
     */
    public function getNomUser() {
        return $this->nomUser;
    }

    /**
     * Set the nom user.
     *
     * @param string $nomUser The nom user.
     */
    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
        return $this;
    }
}
