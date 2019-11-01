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
 * Complement pcs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComplementPcsTrait {

    /**
     * Complement pcs.
     *
     * @var string
     */
    private $complementPcs;

    /**
     * Get the complement pcs.
     *
     * @return string Returns the complement pcs.
     */
    public function getComplementPcs() {
        return $this->complementPcs;
    }

    /**
     * Set the complement pcs.
     *
     * @param string $complementPcs The complement pcs.
     */
    public function setComplementPcs($complementPcs) {
        $this->complementPcs = $complementPcs;
        return $this;
    }
}
