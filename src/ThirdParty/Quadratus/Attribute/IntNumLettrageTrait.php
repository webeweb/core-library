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
 * Num lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLettrageTrait {

    /**
     * Num lettrage.
     *
     * @var int
     */
    private $numLettrage;

    /**
     * Get the num lettrage.
     *
     * @return int Returns the num lettrage.
     */
    public function getNumLettrage() {
        return $this->numLettrage;
    }

    /**
     * Set the num lettrage.
     *
     * @param int $numLettrage The num lettrage.
     */
    public function setNumLettrage($numLettrage) {
        $this->numLettrage = $numLettrage;
        return $this;
    }
}
