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
 * Detail salarie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailSalarieTrait {

    /**
     * Detail salarie.
     *
     * @var bool
     */
    private $detailSalarie;

    /**
     * Get the detail salarie.
     *
     * @return bool Returns the detail salarie.
     */
    public function getDetailSalarie() {
        return $this->detailSalarie;
    }

    /**
     * Set the detail salarie.
     *
     * @param bool $detailSalarie The detail salarie.
     */
    public function setDetailSalarie($detailSalarie) {
        $this->detailSalarie = $detailSalarie;
        return $this;
    }
}
