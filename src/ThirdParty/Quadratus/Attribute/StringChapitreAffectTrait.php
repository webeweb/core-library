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
 * Chapitre affect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChapitreAffectTrait {

    /**
     * Chapitre affect.
     *
     * @var string
     */
    private $chapitreAffect;

    /**
     * Get the chapitre affect.
     *
     * @return string Returns the chapitre affect.
     */
    public function getChapitreAffect() {
        return $this->chapitreAffect;
    }

    /**
     * Set the chapitre affect.
     *
     * @param string $chapitreAffect The chapitre affect.
     */
    public function setChapitreAffect($chapitreAffect) {
        $this->chapitreAffect = $chapitreAffect;
        return $this;
    }
}
