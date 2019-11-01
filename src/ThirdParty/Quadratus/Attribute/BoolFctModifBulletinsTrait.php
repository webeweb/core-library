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
 * Fct modif bulletins trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifBulletinsTrait {

    /**
     * Fct modif bulletins.
     *
     * @var bool
     */
    private $fctModifBulletins;

    /**
     * Get the fct modif bulletins.
     *
     * @return bool Returns the fct modif bulletins.
     */
    public function getFctModifBulletins() {
        return $this->fctModifBulletins;
    }

    /**
     * Set the fct modif bulletins.
     *
     * @param bool $fctModifBulletins The fct modif bulletins.
     */
    public function setFctModifBulletins($fctModifBulletins) {
        $this->fctModifBulletins = $fctModifBulletins;
        return $this;
    }
}
