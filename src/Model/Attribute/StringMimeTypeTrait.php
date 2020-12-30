<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String mime type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringMimeTypeTrait {

    /**
     * Mime type.
     *
     * @var string|null
     */
    protected $mimeType;

    /**
     * Get the mime type.
     *
     * @return string|null Returns the mime type.
     */
    public function getMimeType(): ?string {
        return $this->mimeType;
    }

    /**
     * Set the mime type.
     *
     * @param string|null $mimeType The mime type.
     */
    public function setMimeType(?string $mimeType): self {
        $this->mimeType = $mimeType;
        return $this;
    }
}
