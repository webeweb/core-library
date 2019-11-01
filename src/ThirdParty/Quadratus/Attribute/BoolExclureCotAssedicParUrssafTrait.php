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
 * Exclure cot assedic par urssaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureCotAssedicParUrssafTrait {

    /**
     * Exclure cot assedic par urssaf.
     *
     * @var bool
     */
    private $exclureCotAssedicParUrssaf;

    /**
     * Get the exclure cot assedic par urssaf.
     *
     * @return bool Returns the exclure cot assedic par urssaf.
     */
    public function getExclureCotAssedicParUrssaf() {
        return $this->exclureCotAssedicParUrssaf;
    }

    /**
     * Set the exclure cot assedic par urssaf.
     *
     * @param bool $exclureCotAssedicParUrssaf The exclure cot assedic par urssaf.
     */
    public function setExclureCotAssedicParUrssaf($exclureCotAssedicParUrssaf) {
        $this->exclureCotAssedicParUrssaf = $exclureCotAssedicParUrssaf;
        return $this;
    }
}
