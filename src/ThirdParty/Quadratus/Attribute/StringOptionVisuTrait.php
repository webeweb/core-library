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
 * Option visu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOptionVisuTrait {

    /**
     * Option visu.
     *
     * @var string
     */
    private $optionVisu;

    /**
     * Get the option visu.
     *
     * @return string Returns the option visu.
     */
    public function getOptionVisu() {
        return $this->optionVisu;
    }

    /**
     * Set the option visu.
     *
     * @param string $optionVisu The option visu.
     */
    public function setOptionVisu($optionVisu) {
        $this->optionVisu = $optionVisu;
        return $this;
    }
}
