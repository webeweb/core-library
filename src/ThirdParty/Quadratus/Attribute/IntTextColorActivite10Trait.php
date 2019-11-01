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
 * Text color activite10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite10Trait {

    /**
     * Text color activite10.
     *
     * @var int
     */
    private $textColorActivite10;

    /**
     * Get the text color activite10.
     *
     * @return int Returns the text color activite10.
     */
    public function getTextColorActivite10() {
        return $this->textColorActivite10;
    }

    /**
     * Set the text color activite10.
     *
     * @param int $textColorActivite10 The text color activite10.
     */
    public function setTextColorActivite10($textColorActivite10) {
        $this->textColorActivite10 = $textColorActivite10;
        return $this;
    }
}
