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
 * Brut al sal min conv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBrutAlSalMinConvTrait {

    /**
     * Brut al sal min conv.
     *
     * @var bool
     */
    private $brutAlSalMinConv;

    /**
     * Get the brut al sal min conv.
     *
     * @return bool Returns the brut al sal min conv.
     */
    public function getBrutAlSalMinConv() {
        return $this->brutAlSalMinConv;
    }

    /**
     * Set the brut al sal min conv.
     *
     * @param bool $brutAlSalMinConv The brut al sal min conv.
     */
    public function setBrutAlSalMinConv($brutAlSalMinConv) {
        $this->brutAlSalMinConv = $brutAlSalMinConv;
        return $this;
    }
}
