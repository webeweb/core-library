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
 * Maj codes activite cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMajCodesActiviteCgaTrait {

    /**
     * Maj codes activite cga.
     *
     * @var string
     */
    private $majCodesActiviteCga;

    /**
     * Get the maj codes activite cga.
     *
     * @return string Returns the maj codes activite cga.
     */
    public function getMajCodesActiviteCga() {
        return $this->majCodesActiviteCga;
    }

    /**
     * Set the maj codes activite cga.
     *
     * @param string $majCodesActiviteCga The maj codes activite cga.
     */
    public function setMajCodesActiviteCga($majCodesActiviteCga) {
        $this->majCodesActiviteCga = $majCodesActiviteCga;
        return $this;
    }
}
