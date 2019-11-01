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
 * Retraite97 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRetraite97Trait {

    /**
     * Retraite97.
     *
     * @var bool
     */
    private $retraite97;

    /**
     * Get the retraite97.
     *
     * @return bool Returns the retraite97.
     */
    public function getRetraite97() {
        return $this->retraite97;
    }

    /**
     * Set the retraite97.
     *
     * @param bool $retraite97 The retraite97.
     */
    public function setRetraite97($retraite97) {
        $this->retraite97 = $retraite97;
        return $this;
    }
}
