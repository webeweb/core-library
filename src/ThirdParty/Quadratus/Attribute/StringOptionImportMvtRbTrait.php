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
 * Option import mvt rb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOptionImportMvtRbTrait {

    /**
     * Option import mvt rb.
     *
     * @var string
     */
    private $optionImportMvtRb;

    /**
     * Get the option import mvt rb.
     *
     * @return string Returns the option import mvt rb.
     */
    public function getOptionImportMvtRb() {
        return $this->optionImportMvtRb;
    }

    /**
     * Set the option import mvt rb.
     *
     * @param string $optionImportMvtRb The option import mvt rb.
     */
    public function setOptionImportMvtRb($optionImportMvtRb) {
        $this->optionImportMvtRb = $optionImportMvtRb;
        return $this;
    }
}
