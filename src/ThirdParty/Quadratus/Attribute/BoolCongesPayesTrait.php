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
 * Conges payes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCongesPayesTrait {

    /**
     * Conges payes.
     *
     * @var bool
     */
    private $congesPayes;

    /**
     * Get the conges payes.
     *
     * @return bool Returns the conges payes.
     */
    public function getCongesPayes() {
        return $this->congesPayes;
    }

    /**
     * Set the conges payes.
     *
     * @param bool $congesPayes The conges payes.
     */
    public function setCongesPayes($congesPayes) {
        $this->congesPayes = $congesPayes;
        return $this;
    }
}
