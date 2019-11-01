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
 * Non facturable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonFacturableTrait {

    /**
     * Non facturable.
     *
     * @var bool
     */
    private $nonFacturable;

    /**
     * Get the non facturable.
     *
     * @return bool Returns the non facturable.
     */
    public function getNonFacturable() {
        return $this->nonFacturable;
    }

    /**
     * Set the non facturable.
     *
     * @param bool $nonFacturable The non facturable.
     */
    public function setNonFacturable($nonFacturable) {
        $this->nonFacturable = $nonFacturable;
        return $this;
    }
}
