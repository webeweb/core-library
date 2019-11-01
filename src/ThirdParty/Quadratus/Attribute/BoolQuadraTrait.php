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
 * Quadra trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQuadraTrait {

    /**
     * Quadra.
     *
     * @var bool
     */
    private $quadra;

    /**
     * Get the quadra.
     *
     * @return bool Returns the quadra.
     */
    public function getQuadra() {
        return $this->quadra;
    }

    /**
     * Set the quadra.
     *
     * @param bool $quadra The quadra.
     */
    public function setQuadra($quadra) {
        $this->quadra = $quadra;
        return $this;
    }
}
