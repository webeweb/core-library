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
 * Code centre urssaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCentreUrssafTrait {

    /**
     * Code centre urssaf.
     *
     * @var string
     */
    private $codeCentreUrssaf;

    /**
     * Get the code centre urssaf.
     *
     * @return string Returns the code centre urssaf.
     */
    public function getCodeCentreUrssaf() {
        return $this->codeCentreUrssaf;
    }

    /**
     * Set the code centre urssaf.
     *
     * @param string $codeCentreUrssaf The code centre urssaf.
     */
    public function setCodeCentreUrssaf($codeCentreUrssaf) {
        $this->codeCentreUrssaf = $codeCentreUrssaf;
        return $this;
    }
}
