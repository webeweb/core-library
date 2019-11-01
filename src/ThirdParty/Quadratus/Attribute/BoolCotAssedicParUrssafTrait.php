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
 * Cot assedic par urssaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCotAssedicParUrssafTrait {

    /**
     * Cot assedic par urssaf.
     *
     * @var bool
     */
    private $cotAssedicParUrssaf;

    /**
     * Get the cot assedic par urssaf.
     *
     * @return bool Returns the cot assedic par urssaf.
     */
    public function getCotAssedicParUrssaf() {
        return $this->cotAssedicParUrssaf;
    }

    /**
     * Set the cot assedic par urssaf.
     *
     * @param bool $cotAssedicParUrssaf The cot assedic par urssaf.
     */
    public function setCotAssedicParUrssaf($cotAssedicParUrssaf) {
        $this->cotAssedicParUrssaf = $cotAssedicParUrssaf;
        return $this;
    }
}
