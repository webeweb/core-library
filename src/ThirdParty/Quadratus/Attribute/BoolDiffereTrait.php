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
 * Differe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDiffereTrait {

    /**
     * Differe.
     *
     * @var bool
     */
    private $differe;

    /**
     * Get the differe.
     *
     * @return bool Returns the differe.
     */
    public function getDiffere() {
        return $this->differe;
    }

    /**
     * Set the differe.
     *
     * @param bool $differe The differe.
     */
    public function setDiffere($differe) {
        $this->differe = $differe;
        return $this;
    }
}
