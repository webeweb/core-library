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
 * Tds142 deja calcule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds142DejaCalculeTrait {

    /**
     * Tds142 deja calcule.
     *
     * @var bool
     */
    private $tds142DejaCalcule;

    /**
     * Get the tds142 deja calcule.
     *
     * @return bool Returns the tds142 deja calcule.
     */
    public function getTds142DejaCalcule() {
        return $this->tds142DejaCalcule;
    }

    /**
     * Set the tds142 deja calcule.
     *
     * @param bool $tds142DejaCalcule The tds142 deja calcule.
     */
    public function setTds142DejaCalcule($tds142DejaCalcule) {
        $this->tds142DejaCalcule = $tds142DejaCalcule;
        return $this;
    }
}
