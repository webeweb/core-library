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
 * Trs aff mat dang trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsAffMatDangTrait {

    /**
     * Trs aff mat dang.
     *
     * @var string
     */
    private $trsAffMatDang;

    /**
     * Get the trs aff mat dang.
     *
     * @return string Returns the trs aff mat dang.
     */
    public function getTrsAffMatDang() {
        return $this->trsAffMatDang;
    }

    /**
     * Set the trs aff mat dang.
     *
     * @param string $trsAffMatDang The trs aff mat dang.
     */
    public function setTrsAffMatDang($trsAffMatDang) {
        $this->trsAffMatDang = $trsAffMatDang;
        return $this;
    }
}
