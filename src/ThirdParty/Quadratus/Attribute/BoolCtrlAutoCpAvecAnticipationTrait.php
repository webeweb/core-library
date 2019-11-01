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
 * Ctrl auto cp avec anticipation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCtrlAutoCpAvecAnticipationTrait {

    /**
     * Ctrl auto cp avec anticipation.
     *
     * @var bool
     */
    private $ctrlAutoCpAvecAnticipation;

    /**
     * Get the ctrl auto cp avec anticipation.
     *
     * @return bool Returns the ctrl auto cp avec anticipation.
     */
    public function getCtrlAutoCpAvecAnticipation() {
        return $this->ctrlAutoCpAvecAnticipation;
    }

    /**
     * Set the ctrl auto cp avec anticipation.
     *
     * @param bool $ctrlAutoCpAvecAnticipation The ctrl auto cp avec anticipation.
     */
    public function setCtrlAutoCpAvecAnticipation($ctrlAutoCpAvecAnticipation) {
        $this->ctrlAutoCpAvecAnticipation = $ctrlAutoCpAvecAnticipation;
        return $this;
    }
}
