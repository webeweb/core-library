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
 * Text color activite6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite6Trait {

    /**
     * Text color activite6.
     *
     * @var int
     */
    private $textColorActivite6;

    /**
     * Get the text color activite6.
     *
     * @return int Returns the text color activite6.
     */
    public function getTextColorActivite6() {
        return $this->textColorActivite6;
    }

    /**
     * Set the text color activite6.
     *
     * @param int $textColorActivite6 The text color activite6.
     */
    public function setTextColorActivite6($textColorActivite6) {
        $this->textColorActivite6 = $textColorActivite6;
        return $this;
    }
}
