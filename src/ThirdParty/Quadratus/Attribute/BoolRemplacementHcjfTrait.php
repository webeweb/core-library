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
 * Remplacement hcjf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemplacementHcjfTrait {

    /**
     * Remplacement hcjf.
     *
     * @var bool
     */
    private $remplacementHcjf;

    /**
     * Get the remplacement hcjf.
     *
     * @return bool Returns the remplacement hcjf.
     */
    public function getRemplacementHcjf() {
        return $this->remplacementHcjf;
    }

    /**
     * Set the remplacement hcjf.
     *
     * @param bool $remplacementHcjf The remplacement hcjf.
     */
    public function setRemplacementHcjf($remplacementHcjf) {
        $this->remplacementHcjf = $remplacementHcjf;
        return $this;
    }
}
