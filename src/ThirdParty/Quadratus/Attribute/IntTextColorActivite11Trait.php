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
 * Text color activite11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite11Trait {

    /**
     * Text color activite11.
     *
     * @var int
     */
    private $textColorActivite11;

    /**
     * Get the text color activite11.
     *
     * @return int Returns the text color activite11.
     */
    public function getTextColorActivite11() {
        return $this->textColorActivite11;
    }

    /**
     * Set the text color activite11.
     *
     * @param int $textColorActivite11 The text color activite11.
     */
    public function setTextColorActivite11($textColorActivite11) {
        $this->textColorActivite11 = $textColorActivite11;
        return $this;
    }
}
