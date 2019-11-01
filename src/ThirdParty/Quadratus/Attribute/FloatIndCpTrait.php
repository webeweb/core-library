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
 * Ind cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndCpTrait {

    /**
     * Ind cp.
     *
     * @var float
     */
    private $indCp;

    /**
     * Get the ind cp.
     *
     * @return float Returns the ind cp.
     */
    public function getIndCp() {
        return $this->indCp;
    }

    /**
     * Set the ind cp.
     *
     * @param float $indCp The ind cp.
     */
    public function setIndCp($indCp) {
        $this->indCp = $indCp;
        return $this;
    }
}
