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
 * Categ salarie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCategSalarieTrait {

    /**
     * Categ salarie.
     *
     * @var int
     */
    private $categSalarie;

    /**
     * Get the categ salarie.
     *
     * @return int Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Set the categ salarie.
     *
     * @param int $categSalarie The categ salarie.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }
}
