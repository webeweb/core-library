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
 * Tot cot urssaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotCotUrssafTrait {

    /**
     * Tot cot urssaf.
     *
     * @var float
     */
    private $totCotUrssaf;

    /**
     * Get the tot cot urssaf.
     *
     * @return float Returns the tot cot urssaf.
     */
    public function getTotCotUrssaf() {
        return $this->totCotUrssaf;
    }

    /**
     * Set the tot cot urssaf.
     *
     * @param float $totCotUrssaf The tot cot urssaf.
     */
    public function setTotCotUrssaf($totCotUrssaf) {
        $this->totCotUrssaf = $totCotUrssaf;
        return $this;
    }
}
