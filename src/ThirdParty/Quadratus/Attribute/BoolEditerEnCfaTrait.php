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
 * Editer en cfa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditerEnCfaTrait {

    /**
     * Editer en cfa.
     *
     * @var bool
     */
    private $editerEnCfa;

    /**
     * Get the editer en cfa.
     *
     * @return bool Returns the editer en cfa.
     */
    public function getEditerEnCfa() {
        return $this->editerEnCfa;
    }

    /**
     * Set the editer en cfa.
     *
     * @param bool $editerEnCfa The editer en cfa.
     */
    public function setEditerEnCfa($editerEnCfa) {
        $this->editerEnCfa = $editerEnCfa;
        return $this;
    }
}
