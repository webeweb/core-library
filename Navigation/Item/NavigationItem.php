<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Navigation\Item;

use WBW\Library\Core\Navigation\NavigationInterface;
use WBW\Library\Core\Node\AbstractNode;

/**
 * Navigation item.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Navigation\Item
 * @final
 * @deprecated
 */
final class NavigationItem extends AbstractNode implements NavigationInterface {

	/**
	 * Href.
	 *
	 * @var string
	 */
	private $href;

	/**
	 * Icon.
	 *
	 * @var string
	 */
	private $icon;

	/**
	 * Constructor.
	 *
	 * @param string $span The span.
	 * @param string $icon The icon.
	 * @param string $href The href.
	 */
	public function __construct($span, $icon = null, $href = self::DEFAULT_HREF) {
		parent::__construct($span);
		$this->icon	 = $icon;
		$this->href	 = $href;
	}

	/**
	 * Get the href.
	 *
	 * @return string Returns the href.
	 */
	public function getHref() {
		return $this->href;
	}

	/**
	 * Get the icon.
	 *
	 * @return string Returns the icon.
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * Get the span.
	 *
	 * @return string Returns the span.
	 */
	public function getSpan() {
		return parent::getId();
	}

	/**
	 * Set the href.
	 *
	 * @param string $href The href.
	 * @return NavigationItem Returns the navigation item.
	 */
	public function setHref($href) {
		$this->href = $href;
		return $this;
	}

	/**
	 * Set the icon.
	 *
	 * @param string $icon The icon.
	 * @return NavigationItem Returns the navigation item.
	 */
	public function setIcon($icon) {
		$this->icon = $icon;
		return $this;
	}

	/**
	 * Convert into an array representing this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the href.
		if (!is_null($this->href)) {
			$output["href"] = $this->href;
		}

		// Check the icon.
		if (!is_null($this->icon)) {
			$output["icon"] = $this->icon;
		}

		// Check the span.
		if (!is_null($this->getId())) {
			$output["span"] = $this->getId();
		}

		// Check the nodes.
		if (0 < $this->size()) {
			$output["subitems"] = [];
			foreach ($this->getNodes() as $current) {
				if ($current instanceof NavigationItem) {
					$output["subitems"][] = $current->toArray();
				}
			}
		}

		// Return the output.
		return $output;
	}

}
