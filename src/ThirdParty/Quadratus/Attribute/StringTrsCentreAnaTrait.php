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
 * Trs centre ana trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCentreAnaTrait {

    /**
     * Trs centre ana.
     *
     * @var string
     */
    private $trsCentreAna;

    /**
     * Get the trs centre ana.
     *
     * @return string Returns the trs centre ana.
     */
    public function getTrsCentreAna() {
        return $this->trsCentreAna;
    }

    /**
     * Set the trs centre ana.
     *
     * @param string $trsCentreAna The trs centre ana.
     */
    public function setTrsCentreAna($trsCentreAna) {
        $this->trsCentreAna = $trsCentreAna;
        return $this;
    }
}
