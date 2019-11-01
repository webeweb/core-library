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
 * Situation fam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSituationFamTrait {

    /**
     * Situation fam.
     *
     * @var string
     */
    private $situationFam;

    /**
     * Get the situation fam.
     *
     * @return string Returns the situation fam.
     */
    public function getSituationFam() {
        return $this->situationFam;
    }

    /**
     * Set the situation fam.
     *
     * @param string $situationFam The situation fam.
     */
    public function setSituationFam($situationFam) {
        $this->situationFam = $situationFam;
        return $this;
    }
}
