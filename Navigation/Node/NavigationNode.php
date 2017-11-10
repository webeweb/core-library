<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Navigation\Node;

/**
 * Navigation node.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Navigation\Node
 */
class NavigationNode extends AbstractNavigationNode {

	/**
	 * Active ?
	 *
	 * @var boolean
	 */
	private $active;

	/**
	 * Enable ?
	 *
	 * @var boolean
	 */
	private $enable;

	/**
	 * Icon.
	 *
	 * @var string
	 */
	private $icon;

	/**
	 * Route.
	 *
	 * @var string
	 */
	private $route;

	/**
	 * URL.
	 *
	 * @var string
	 */
	private $url;

	/**
	 * Visible ?
	 *
	 * @var boolean
	 */
	private $visible;

	/**
	 * Constructor.
	 *
	 * @param string $name The name.
	 * @param string $icon The icon.
	 * @param string $route The route.
	 */
	public function __construct($name, $icon = null, $route = null) {
		parent::__construct($name);
		$this->active	 = false;
		$this->enable	 = false;
		$this->icon		 = $icon;
		$this->route	 = $route;
		$this->url		 = null;
		$this->visible	 = true;
	}

	/**
	 * Get the active.
	 *
	 * @return boolean Returns the active.
	 */
	public final function getActive() {
		return $this->active;
	}

	/**
	 * Get the enable.
	 *
	 * @return boolean Returns the enable.
	 */
	public final function getEnable() {
		return $this->enable;
	}

	/**
	 * Get the icon.
	 *
	 * @return string Returns the icon.
	 */
	public final function getIcon() {
		return $this->icon;
	}

	/**
	 * Get the route.
	 *
	 * @return string Returns the route.
	 */
	public final function getRoute() {
		return $this->route;
	}

	/**
	 * Get the URL.
	 *
	 * @return string Returns the URL.
	 */
	public final function getUrl() {
		return $this->url;
	}

	/**
	 * Get the visible.
	 *
	 * @return boolean Returns the visible.
	 */
	public final function getVisible() {
		return $this->visible;
	}

	/**
	 * Determines if the node is displayable.
	 *
	 * @return boolean Returns true in case of success, false otherwise.
	 */
	public final function isDisplayable() {
		$displayable = $this->enable && $this->visible;
		if (!$displayable) {
			foreach ($this->getNodes() as $current) {
				$displayable = $current->isDisplayable();
				if ($displayable) {
					break;
				}
			}
		}
		return $displayable;
	}

	/**
	 * Set the active.
	 *
	 * @param boolean $active Active ?
	 * @return NavigationNode Returns the navigation node.
	 */
	public final function setActive($active) {
		$this->active = $active;
		return $this;
	}

	/**
	 * Set the enable.
	 *
	 * @param boolean $enable Enable ?.
	 * @return NavigationNode Returns the navigation node.
	 */
	public final function setEnable($enable) {
		$this->enable = $enable;
		return $this;
	}

	/**
	 * Set the icon.
	 *
	 * @param string $icon The icon.
	 * @return NavigationNode Returns the navigation node.
	 */
	public final function setIcon($icon) {
		$this->icon = $icon;
		return $this;
	}

	/**
	 * Set the route.
	 *
	 * @param string $route The route.
	 * @return NavigationNode Returns the navigation node.
	 */
	public final function setRoute($route) {
		$this->route = $route;
		return $this;
	}

	/**
	 * Set the URL.
	 *
	 * @param string $url The URL.
	 * @return NavigationNode Returns the navigation node.
	 */
	public final function setUrl($url) {
		$this->url = $url;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible Visible ?
	 * @return NavigationNode Returns the navigation node.
	 */
	protected final function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

}
