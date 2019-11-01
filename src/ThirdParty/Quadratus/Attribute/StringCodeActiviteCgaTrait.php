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
 * Code activite cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeActiviteCgaTrait {

    /**
     * Code activite cga.
     *
     * @var string
     */
    private $codeActiviteCga;

    /**
     * Get the code activite cga.
     *
     * @return string Returns the code activite cga.
     */
    public function getCodeActiviteCga() {
        return $this->codeActiviteCga;
    }

    /**
     * Set the code activite cga.
     *
     * @param string $codeActiviteCga The code activite cga.
     */
    public function setCodeActiviteCga($codeActiviteCga) {
        $this->codeActiviteCga = $codeActiviteCga;
        return $this;
    }
}
