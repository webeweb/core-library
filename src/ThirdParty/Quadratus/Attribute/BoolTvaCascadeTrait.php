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
 * Tva cascade trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaCascadeTrait {

    /**
     * Tva cascade.
     *
     * @var bool
     */
    private $tvaCascade;

    /**
     * Get the tva cascade.
     *
     * @return bool Returns the tva cascade.
     */
    public function getTvaCascade() {
        return $this->tvaCascade;
    }

    /**
     * Set the tva cascade.
     *
     * @param bool $tvaCascade The tva cascade.
     */
    public function setTvaCascade($tvaCascade) {
        $this->tvaCascade = $tvaCascade;
        return $this;
    }
}
