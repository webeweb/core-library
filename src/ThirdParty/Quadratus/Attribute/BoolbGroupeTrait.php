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
 * b groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolbGroupeTrait {

    /**
     * b groupe.
     *
     * @var bool
     */
    private $bGroupe;

    /**
     * Get the b groupe.
     *
     * @return bool Returns the b groupe.
     */
    public function getbGroupe() {
        return $this->bGroupe;
    }

    /**
     * Set the b groupe.
     *
     * @param bool $bGroupe The b groupe.
     */
    public function setbGroupe($bGroupe) {
        $this->bGroupe = $bGroupe;
        return $this;
    }
}
