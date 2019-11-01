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
 * Jal tre regl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJalTreReglTrait {

    /**
     * Jal tre regl.
     *
     * @var string
     */
    private $jalTreRegl;

    /**
     * Get the jal tre regl.
     *
     * @return string Returns the jal tre regl.
     */
    public function getJalTreRegl() {
        return $this->jalTreRegl;
    }

    /**
     * Set the jal tre regl.
     *
     * @param string $jalTreRegl The jal tre regl.
     */
    public function setJalTreRegl($jalTreRegl) {
        $this->jalTreRegl = $jalTreRegl;
        return $this;
    }
}
