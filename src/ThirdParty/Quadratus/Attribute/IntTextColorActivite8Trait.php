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
 * Text color activite8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite8Trait {

    /**
     * Text color activite8.
     *
     * @var int
     */
    private $textColorActivite8;

    /**
     * Get the text color activite8.
     *
     * @return int Returns the text color activite8.
     */
    public function getTextColorActivite8() {
        return $this->textColorActivite8;
    }

    /**
     * Set the text color activite8.
     *
     * @param int $textColorActivite8 The text color activite8.
     */
    public function setTextColorActivite8($textColorActivite8) {
        $this->textColorActivite8 = $textColorActivite8;
        return $this;
    }
}
