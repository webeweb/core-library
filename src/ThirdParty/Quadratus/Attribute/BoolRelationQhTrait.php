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
 * Relation qh trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRelationQhTrait {

    /**
     * Relation qh.
     *
     * @var bool
     */
    private $relationQh;

    /**
     * Get the relation qh.
     *
     * @return bool Returns the relation qh.
     */
    public function getRelationQh() {
        return $this->relationQh;
    }

    /**
     * Set the relation qh.
     *
     * @param bool $relationQh The relation qh.
     */
    public function setRelationQh($relationQh) {
        $this->relationQh = $relationQh;
        return $this;
    }
}
