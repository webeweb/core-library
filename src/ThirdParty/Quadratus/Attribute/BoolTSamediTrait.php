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
 * T samedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTSamediTrait {

    /**
     * T samedi.
     *
     * @var bool
     */
    private $tSamedi;

    /**
     * Get the t samedi.
     *
     * @return bool Returns the t samedi.
     */
    public function getTSamedi() {
        return $this->tSamedi;
    }

    /**
     * Set the t samedi.
     *
     * @param bool $tSamedi The t samedi.
     */
    public function setTSamedi($tSamedi) {
        $this->tSamedi = $tSamedi;
        return $this;
    }
}
