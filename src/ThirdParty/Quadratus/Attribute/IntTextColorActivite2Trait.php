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
 * Text color activite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite2Trait {

    /**
     * Text color activite2.
     *
     * @var int
     */
    private $textColorActivite2;

    /**
     * Get the text color activite2.
     *
     * @return int Returns the text color activite2.
     */
    public function getTextColorActivite2() {
        return $this->textColorActivite2;
    }

    /**
     * Set the text color activite2.
     *
     * @param int $textColorActivite2 The text color activite2.
     */
    public function setTextColorActivite2($textColorActivite2) {
        $this->textColorActivite2 = $textColorActivite2;
        return $this;
    }
}
