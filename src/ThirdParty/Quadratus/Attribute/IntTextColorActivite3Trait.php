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
 * Text color activite3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite3Trait {

    /**
     * Text color activite3.
     *
     * @var int
     */
    private $textColorActivite3;

    /**
     * Get the text color activite3.
     *
     * @return int Returns the text color activite3.
     */
    public function getTextColorActivite3() {
        return $this->textColorActivite3;
    }

    /**
     * Set the text color activite3.
     *
     * @param int $textColorActivite3 The text color activite3.
     */
    public function setTextColorActivite3($textColorActivite3) {
        $this->textColorActivite3 = $textColorActivite3;
        return $this;
    }
}
