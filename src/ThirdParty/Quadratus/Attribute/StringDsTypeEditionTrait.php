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
 * Ds type edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDsTypeEditionTrait {

    /**
     * Ds type edition.
     *
     * @var string
     */
    private $dsTypeEdition;

    /**
     * Get the ds type edition.
     *
     * @return string Returns the ds type edition.
     */
    public function getDsTypeEdition() {
        return $this->dsTypeEdition;
    }

    /**
     * Set the ds type edition.
     *
     * @param string $dsTypeEdition The ds type edition.
     */
    public function setDsTypeEdition($dsTypeEdition) {
        $this->dsTypeEdition = $dsTypeEdition;
        return $this;
    }
}
