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
 * Majoration cascade trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajorationCascadeTrait {

    /**
     * Majoration cascade.
     *
     * @var bool
     */
    private $majorationCascade;

    /**
     * Get the majoration cascade.
     *
     * @return bool Returns the majoration cascade.
     */
    public function getMajorationCascade() {
        return $this->majorationCascade;
    }

    /**
     * Set the majoration cascade.
     *
     * @param bool $majorationCascade The majoration cascade.
     */
    public function setMajorationCascade($majorationCascade) {
        $this->majorationCascade = $majorationCascade;
        return $this;
    }
}
