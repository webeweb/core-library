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
 * Urssaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUrssafTrait {

    /**
     * Urssaf.
     *
     * @var string
     */
    private $urssaf;

    /**
     * Get the urssaf.
     *
     * @return string Returns the urssaf.
     */
    public function getUrssaf() {
        return $this->urssaf;
    }

    /**
     * Set the urssaf.
     *
     * @param string $urssaf The urssaf.
     */
    public function setUrssaf($urssaf) {
        $this->urssaf = $urssaf;
        return $this;
    }
}
