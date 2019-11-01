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
 * Salaire cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSalaireCpTrait {

    /**
     * Salaire cp.
     *
     * @var bool
     */
    private $salaireCp;

    /**
     * Get the salaire cp.
     *
     * @return bool Returns the salaire cp.
     */
    public function getSalaireCp() {
        return $this->salaireCp;
    }

    /**
     * Set the salaire cp.
     *
     * @param bool $salaireCp The salaire cp.
     */
    public function setSalaireCp($salaireCp) {
        $this->salaireCp = $salaireCp;
        return $this;
    }
}
