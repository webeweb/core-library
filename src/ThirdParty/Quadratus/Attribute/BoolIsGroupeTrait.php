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
 * Is groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsGroupeTrait {

    /**
     * Is groupe.
     *
     * @var bool
     */
    private $isGroupe;

    /**
     * Get the is groupe.
     *
     * @return bool Returns the is groupe.
     */
    public function getIsGroupe() {
        return $this->isGroupe;
    }

    /**
     * Set the is groupe.
     *
     * @param bool $isGroupe The is groupe.
     */
    public function setIsGroupe($isGroupe) {
        $this->isGroupe = $isGroupe;
        return $this;
    }
}
