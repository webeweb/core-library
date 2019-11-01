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
 * Periodicite tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPeriodiciteTvaTrait {

    /**
     * Periodicite tva.
     *
     * @var string
     */
    private $periodiciteTva;

    /**
     * Get the periodicite tva.
     *
     * @return string Returns the periodicite tva.
     */
    public function getPeriodiciteTva() {
        return $this->periodiciteTva;
    }

    /**
     * Set the periodicite tva.
     *
     * @param string $periodiciteTva The periodicite tva.
     */
    public function setPeriodiciteTva($periodiciteTva) {
        $this->periodiciteTva = $periodiciteTva;
        return $this;
    }
}
