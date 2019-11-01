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
 * Tva cpt report g trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptReportGTrait {

    /**
     * Tva cpt report g.
     *
     * @var string
     */
    private $tvaCptReportG;

    /**
     * Get the tva cpt report g.
     *
     * @return string Returns the tva cpt report g.
     */
    public function getTvaCptReportG() {
        return $this->tvaCptReportG;
    }

    /**
     * Set the tva cpt report g.
     *
     * @param string $tvaCptReportG The tva cpt report g.
     */
    public function setTvaCptReportG($tvaCptReportG) {
        $this->tvaCptReportG = $tvaCptReportG;
        return $this;
    }
}
