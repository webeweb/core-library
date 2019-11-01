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
 * Trs aff grp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsAffGrpTrait {

    /**
     * Trs aff grp.
     *
     * @var bool
     */
    private $trsAffGrp;

    /**
     * Get the trs aff grp.
     *
     * @return bool Returns the trs aff grp.
     */
    public function getTrsAffGrp() {
        return $this->trsAffGrp;
    }

    /**
     * Set the trs aff grp.
     *
     * @param bool $trsAffGrp The trs aff grp.
     */
    public function setTrsAffGrp($trsAffGrp) {
        $this->trsAffGrp = $trsAffGrp;
        return $this;
    }
}
