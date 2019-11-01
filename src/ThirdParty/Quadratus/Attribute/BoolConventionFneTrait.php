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
 * Convention fne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolConventionFneTrait {

    /**
     * Convention fne.
     *
     * @var bool
     */
    private $conventionFne;

    /**
     * Get the convention fne.
     *
     * @return bool Returns the convention fne.
     */
    public function getConventionFne() {
        return $this->conventionFne;
    }

    /**
     * Set the convention fne.
     *
     * @param bool $conventionFne The convention fne.
     */
    public function setConventionFne($conventionFne) {
        $this->conventionFne = $conventionFne;
        return $this;
    }
}
