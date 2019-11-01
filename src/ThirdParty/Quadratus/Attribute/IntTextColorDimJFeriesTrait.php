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
 * Text color dim j feries trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorDimJFeriesTrait {

    /**
     * Text color dim j feries.
     *
     * @var int
     */
    private $textColorDimJFeries;

    /**
     * Get the text color dim j feries.
     *
     * @return int Returns the text color dim j feries.
     */
    public function getTextColorDimJFeries() {
        return $this->textColorDimJFeries;
    }

    /**
     * Set the text color dim j feries.
     *
     * @param int $textColorDimJFeries The text color dim j feries.
     */
    public function setTextColorDimJFeries($textColorDimJFeries) {
        $this->textColorDimJFeries = $textColorDimJFeries;
        return $this;
    }
}
