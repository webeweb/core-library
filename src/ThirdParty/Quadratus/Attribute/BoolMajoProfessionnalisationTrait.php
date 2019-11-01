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
 * Majo professionnalisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajoProfessionnalisationTrait {

    /**
     * Majo professionnalisation.
     *
     * @var bool
     */
    private $majoProfessionnalisation;

    /**
     * Get the majo professionnalisation.
     *
     * @return bool Returns the majo professionnalisation.
     */
    public function getMajoProfessionnalisation() {
        return $this->majoProfessionnalisation;
    }

    /**
     * Set the majo professionnalisation.
     *
     * @param bool $majoProfessionnalisation The majo professionnalisation.
     */
    public function setMajoProfessionnalisation($majoProfessionnalisation) {
        $this->majoProfessionnalisation = $majoProfessionnalisation;
        return $this;
    }
}
