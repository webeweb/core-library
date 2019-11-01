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
 * Periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPeriodeTrait {

    /**
     * Periode.
     *
     * @var string
     */
    private $periode;

    /**
     * Get the periode.
     *
     * @return string Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Set the periode.
     *
     * @param string $periode The periode.
     */
    public function setPeriode($periode) {
        $this->periode = $periode;
        return $this;
    }
}
