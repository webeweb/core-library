<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Model;

use WBW\Library\Core\Model\Attribute\IntegerHeightTrait;
use WBW\Library\Core\Model\Attribute\IntegerWidthTrait;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Attribute\ArrayWordsTrait;

/**
 * Page.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Model
 */
class Page {

    use ArrayWordsTrait;
    use IntegerHeightTrait;
    use IntegerWidthTrait;

    /**
     * Parent.
     *
     * @var Document
     */
    private $parent;

    /**
     * Resolution.
     *
     * @var int
     */
    private $resolution;

    /**
     * Rotation.
     *
     * @var int
     */
    private $rotation;

    /**
     * Tag.
     *
     * @var int
     */
    private $tag;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setWords([]);
    }

    /**
     * Get the parent.
     *
     * @return Document Returns the parent.
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Get the resolution.
     *
     * @return int Returns the resolution.
     */
    public function getResolution() {
        return $this->resolution;
    }

    /**
     * Get the rotation.
     *
     * @return int Returns the rotation.
     */
    public function getRotation() {
        return $this->rotation;
    }

    /**
     * Get the tag.
     *
     * @return int Returns the tag.
     */
    public function getTag() {
        return $this->tag;
    }

    /**
     * Set the parent.
     *
     * @param Document|null $parent The parent.
     * @return Page Returns this page.
     */
    public function setParent(Document $parent = null) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the resolution.
     *
     * @param int $resolution
     * @return Page Returns this page.
     */
    public function setResolution($resolution) {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param int $rotation The rotation.
     * @return Page Returns this page.
     */
    public function setRotation($rotation) {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the tag.
     *
     * @param int $tag The tag.
     * @return Page Returns this page.
     */
    public function setTag($tag) {
        $this->tag = $tag;
        return $this;
    }
}