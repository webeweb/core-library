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
 * Tva cpt immos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptImmosTrait {

    /**
     * Tva cpt immos.
     *
     * @var string
     */
    private $tvaCptImmos;

    /**
     * Get the tva cpt immos.
     *
     * @return string Returns the tva cpt immos.
     */
    public function getTvaCptImmos() {
        return $this->tvaCptImmos;
    }

    /**
     * Set the tva cpt immos.
     *
     * @param string $tvaCptImmos The tva cpt immos.
     */
    public function setTvaCptImmos($tvaCptImmos) {
        $this->tvaCptImmos = $tvaCptImmos;
        return $this;
    }
}
