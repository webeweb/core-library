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
 * At bureau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtBureauTrait {

    /**
     * At bureau.
     *
     * @var string
     */
    private $atBureau;

    /**
     * Get the at bureau.
     *
     * @return string Returns the at bureau.
     */
    public function getAtBureau() {
        return $this->atBureau;
    }

    /**
     * Set the at bureau.
     *
     * @param string $atBureau The at bureau.
     */
    public function setAtBureau($atBureau) {
        $this->atBureau = $atBureau;
        return $this;
    }
}
