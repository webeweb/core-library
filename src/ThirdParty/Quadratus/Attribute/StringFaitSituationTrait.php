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
 * Fait situation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitSituationTrait {

    /**
     * Fait situation.
     *
     * @var string
     */
    private $faitSituation;

    /**
     * Get the fait situation.
     *
     * @return string Returns the fait situation.
     */
    public function getFaitSituation() {
        return $this->faitSituation;
    }

    /**
     * Set the fait situation.
     *
     * @param string $faitSituation The fait situation.
     */
    public function setFaitSituation($faitSituation) {
        $this->faitSituation = $faitSituation;
        return $this;
    }
}
